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
        //dd($products);
        return view('store.index', compact('products'));
    }
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first(); //el ->first indica que utilice el primero que encuentre.
        return view ('store.show', compact('product'));
    }
    public function slide()
    {
        $products=Product::all();
        return view('store.partials.slider', compact('products'));
    }
}
