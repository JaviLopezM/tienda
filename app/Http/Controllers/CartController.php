<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Session;

use App\Product;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function __construct()
    {
        $ship=15;
        if(!\Session::has('cart')) \Session::put('cart', array());
        if(!\Session::has('shippment')) \Session::put('shippment', $ship);

    }
    // Mostrar carrito
    public function show()
    {
        $cart = \Session::get('cart');
        $total = $this->total();
        $totalqty = $this->totalqty();
        $ship = \Session::get('shippment');
        return view('store.cart', compact('cart', 'total', 'totalqty','ship'));

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
    public function trash()
    {

        \Session::forget('cart');

        return redirect() ->route('cart-show');
    }
    public function update(Product $product)
    {
        $cart = \Session::get('cart');
        $cart[$product->slug]->quantity = request()->get('num');
        \Session::put('cart', $cart);

        return redirect() ->route('cart-show');
    }
    public function total(){
        $ship = \Session::get('shippment');
        $cart = \Session::get('cart');
        $total = 0;
        foreach ($cart as $item){
            $total+= $item->price * $item->quantity;
        }

        return $total;
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
    public function orderDetail()
    {
        if(count(\Session::get('cart'))<=0) return redirect()-route('home');
        $cart = \Session::get('cart');
        $total = $this->total();
        $user = Auth::user();
        $ship = \Session::get('shippment');
        $totalqty = $this->totalqty();

        return view('store.order-detail', compact('cart', 'total', 'user', 'totalqty', 'ship'));
    }
    public function destroyUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        $this->trash();

        return redirect() ->route('home');
    }
    public function updateUser(Request $request)
    {
        $user = Auth::user();
        $idUser = $user->id;
        $user->name = $request['name'];
        $user->last_name = $request['last_name'];
        $user->address = $request['address'];
        $user->postal =$request['postal'];
        $user->locality = $request['locality'];
        $user->update();

        if ($request->user()->update()) {
            $message = 'Perfil actualizado';
        }
        return redirect() ->route('perfil',compact('idUser'))->with(['message' => $message]);
    }
    public function updateShipping(Request $request)
    {
        $user = Auth::user();
        $user->name2 = $request['name2'];
        $user->last_name2 = $request['last_name2'];
        $user->address2 = $request['address2'];
        $user->postal2 =$request['postal2'];
        $user->locality2 = $request['locality2'];
        $user->update();

        return redirect() ->route('order-detail');
    }
    public function keep()
    {

        $user = Auth::user();
        $user->name2 = $user->name;
        $user->last_name2 =  $user->last_name;
        $user->address2 =  $user->address;
        $user->postal2 = $user->postal;
        $user->locality2 = $user->locality;
        $user->update();

        return redirect() ->route('order-detail');
    }
}
