<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;

class StoreController extends Controller
{
    public function index()
    {

        $products =Product::all();
        $totalqty = $this->totalqty();
        //dd($products);
        return view('store.index', compact('products', 'totalqty'));
    }
    public function show($slug)
    {
        $products = Product::all();
        $product = Product::where('slug', $slug)->first(); //el ->first indica que utilice el primero que encuentre.
        $totalqty = $this->totalqty();
        return view ('store.show', compact('product', 'products','totalqty'));
    }
    public function slide()
    {
        $products=Product::all();
        return view('store.partials.slider', compact('products'));
    }

    public function totalqty(){
        $cart = \Session::get('cart');
        $totalqty = 0;
        foreach ($cart as $item){
            $totalqty+= $item->quantity;
        }
        return $totalqty;
    }
}
