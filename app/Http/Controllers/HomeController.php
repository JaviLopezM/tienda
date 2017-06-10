<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\OrderItem;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Thujohn\Rss\Rss;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
         if($id == Auth::user()->id){
             $user=User::find($id);
             $orders=Order::having('user_id', '=', $id)->get();
                 //  $products = Product::having('category_id', '=', 1)->get();
             $totalqty = $this->totalqty();
            return view('home',compact('user', 'totalqty', 'orders'));
        }else {
            return redirect('/');
        }

    }
    public function totalqty(){
        $cart = \Session::get('cart');
        $totalqty = 0;
        if ($cart!= null) {
            foreach ($cart as $item) {
                $totalqty += $item->quantity;
            }
        }
        return $totalqty;
    }
    public function getOrder($id)
    {  $order=Order::find($id);

        if($order->user_id == Auth::user()->id){
            $products=Product::all();
            $items=OrderItem::having('order_id', '=', $id)->get();
             //  $products = Product::having('category_id', '=', 1)->get();
            $totalqty = $this->totalqty();
            return view('store.order',compact('user', 'totalqty', 'order', 'items', 'products'));
        }else {
            return redirect('/')->with('alert', 'No tiene permiso para acceder a este elemento');
        }

    }
    public function genRss(Rss $rss){
        $feed = $rss->feed('2.0', 'UTF-8');
        $feed->channel([
            'title'       => 'JaviShop',
            'description' => 'Tienda OnLine de Prueba',
            'link'        => URL::to('/'),
        ]);

        $products=Product::all();
        foreach ($products as $product) {

            $feed->item([
                'title' => $product->name,
                'description|cdata' => $product->description,
                'link' => URL::to('/').'product/'.$product->slug,
            ]);
        }

        $feed->save('rss.xml');
    }
    public function rss(Rss $rss ){


        $feed = $rss->feed('2.0', 'UTF-8');
        $feed->channel([
            'title'       => 'JaviShop',
            'description' => 'Tienda OnLine de Prueba',
            'link'        => URL::to('/'),
        ]);

        $products=Product::all();
        foreach ($products as $product) {

            $feed->item([
                'title' => $product->name,
                'description|cdata' => $product->description,
                'link' => URL::to('/').'product/'.$product->slug,
            ]);
        }

        return response($feed, 200)->header('Content-Type', 'text/xml');
    }



}
