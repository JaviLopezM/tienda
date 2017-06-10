<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\Product;
use Illuminate\Support\Facades\Auth;

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
            $totalqty = $this->totalqty();
            return view('home',compact('user', 'totalqty'));
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



}
