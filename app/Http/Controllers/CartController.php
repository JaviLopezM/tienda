<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Session;
use App\Product;
use App\Http\Requests;

class CartController extends Controller
{
    public function __construct()
    {
        if(!\Session::has('cart')) \Session::put('cart', array());
    }
    // Mostrar carrito
    public function show()
    {
        $cart = \Session::get('cart');
        return view('store.cart', compact('cart'));

    }
    // añadir al carrito
    public function add(Product $product)
    {
        $cart = \Session::get('cart');
        $product -> quantity =1;
        $cart[$product ->slug] = $product;
        \Session::put('cart', $cart);

        return redirect() ->route('cart-show');
    }
    public function delete(Product $product)
    {
        $cart = \Session::get('cart');
        unset($cart[$product->slug]);
        \Session::put('cart', $cart);

        return redirect() ->route('cart-show');
    }
    public function trash(Product $product)
    {

        \Session::forget('cart');

        return redirect() ->route('cart-show');
    }
}
