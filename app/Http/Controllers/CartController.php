<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Session;
use App\Product;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        $total = $this->total();
        return view('store.cart', compact('cart', 'total'));

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
        $cart = \Session::get('cart');
        $total = 0;
        foreach ($cart as $item){
            $total+= $item->price * $item->quantity;
        }
        return $total;
    }
    public function orderDetail()
    {
        if(count(\Session::get('cart'))<=0) return redirect()-route('home');
        $cart = \Session::get('cart');
        $total = $this->total();
        $user = Auth::user();

        return view('store.order-detail', compact('cart', 'total', 'user'));
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
        $user->user = $request['user'];
        $user->name = $request['name'];
        $user->last_name = $request['last_name'];
        $user->email = $request['email'];
        $user->address = $request['address'];
        $user->postal =$request['postal'];
        $user->locality = $request['locality'];
        $user->update();

        if ($request->user()->update()) {
            $message = 'Perfil actualizado';
        }
        return redirect() ->route('perfil',compact('idUser'))->with(['message' => $message]);
    }
}
