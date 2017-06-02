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
}
