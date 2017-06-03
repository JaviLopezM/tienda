@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-shopping-cart"></i> Detalle Del Pedido</h1>
        </div>
    </div>
        <div class="table-responsive">
            <h3>Datos del usuario</h3>
            <table class="table table-striped table-hover table-bordered">
                <tr><td>Nombre:</td><td>{{Auth::user()->name . " " . Auth::user()->last_name}}</td></tr>
                <tr><td>Usuario:</td><td>{{Auth::user()->user}}</td></tr>
                <tr><td>Correo:</td><td>{{Auth::user()->email}}</td></tr>
                <tr><td>Dirección</td><td>{{Auth::user()->address}}</td></tr>
                <tr><td>Código Postal:</td><td>{{Auth::user()->postal}}</td></tr>
                <tr><td>Dirección:</td><td>{{Auth::user()->locality}}</td></tr>
            </table>
        </div>
        <div class="table-responsive">
            <h3>Datos del pedido</h3>
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
            @foreach($cart as $item)
                <tr>
                 <td>{{$item->name}}</td>
                 <td>{{number_format($item->price,2)}}€</td>
                 <td>{{$item->quantity}}</td>
                 <td>{{number_format($item->price * $item->quantity,2)}}€</td>
                </tr>
            @endforeach
                <tr style="font-weight: bold;border-top: black 5px solid ">
                    <td>
                        <h3 style="font-weight: bold">Total</h3>
                    </td>
                    <td></td><td></td>
                    <td>
                        <h3>{{ number_format($total,2) }} €</h3>
                    </td>
                </tr>
            </table>
        </div>
    <div style="text-align: center; margin-bottom: 50px">
    <a href="{{ route('cart-show') }}" class="btn btn-primary" style="font-size: larger">
        <i class="fa fa-chevron-circle-left fa-x2"></i> Volver al carrito</a>
    <a href="" class="btn btn-primary" style="font-size: larger">
        Finalizar <i class="fa fa-paypal fa-x2"></i></a>
    </div>
@endsection