<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;


use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentDetail;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

use App\Order;
use App\OrderItem;

//class PaypalController extends Controller

class PaypalController extends BaseController
{
	private $_api_context;

	public function __construct()
    {
        // setup PayPal api context
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

	public function postPayment()
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');


        $items = array();
        $subtotal = 0;
        $cart = \Session::get('cart');
        $currency = 'EUR';

        foreach($cart as $producto){
            $item = new Item();
            $item->setName($producto->name)
                ->setCurrency($currency)
                ->setDescription($producto->extract)
                ->setQuantity($producto->quantity)
                ->setPrice($producto->price);

            $items[] = $item;
            $subtotal += $producto->quantity * $producto->price;
        }

        $item_list = new ItemList();
        $item_list->setItems($items);

        $details = new Details();
        $details->setSubtotal($subtotal)
            ->setShipping(10);

        $total = $subtotal + 10;

        $amount = new Amount();
        $amount->setCurrency($currency)
            ->setTotal($total)
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Pedido de prueba desde shop-javierlopez');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(\URL::route('payment.status'))
            ->setCancelUrl(\URL::route('payment.status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));

        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PayPalConnectionException$ex) {
            if (\Config::get('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
                die('Ups! Algo salió mal');
            }
        }

        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        // add payment ID to session
        \Session::put('paypal_paymentId', $payment->getId());

        if(isset($redirect_url)) {
            // redirect to paypal
            return \Redirect::away($redirect_url);
        }

        return \Redirect::route('cart-show')
            ->with('message', 'Ups! Error desconocido.');

    }

	public function getPaymentStatus()
    {
        // Get the payment ID before session clear
        $paymentId = \Session::get('paymentId');




        $payerId = \Request::get('payer_id');
        $token = \Request::get('token');

        if (empty($payerId) || empty($token)) {
            return \Redirect::route('home')
                ->with('message', 'Hubo un problema al intentar pagar con Paypal');
        }

        $payment = Payment::get($paymentId, $this->_api_context);

        $execution = new PaymentExecution();
        $execution->setPayerId(\Request::get('payer_id'));

        $result = $payment->execute($execution, $this->_api_context);

        // clear the session payment ID
        \Session::forget('paymentId');
        if ($result->getState() == 'approved') {

            $this->saveOrder();

            \Session::forget('cart');

            return \Redirect::route('home')
                ->with('message', 'Compra realizada de forma correcta');
        }
        return \Redirect::route('home')
            ->with('message', 'La compra fue cancelada');
    }

	protected function saveOrder()
    {
        $subtotal = 0;
        $cart = \Session::get('cart');
        $shipping = 10;

        foreach($cart as $producto){
            $subtotal += $producto->quantity * $producto->price;
        }

        $order = Order::create([
            'subtotal' => $subtotal,
            'shipping' => $shipping,
            'user_id' => \Auth::user()->id
        ]);

        foreach($cart as $producto){
            $this->saveOrderItem($producto, $order->id);
        }
    }

	protected function saveOrderItem($producto, $order_id)
    {
        OrderItem::create([
            'price' => $producto->price,
            'quantity' => $producto->quantity,
            'product_id' => $producto->id,
            'order_id' => $order_id
        ]);
    }

}