@extends('layouts.app')

@section('content')
    <div class="container text-center" ng-controller="modalCtrl">
        <div class="page-header">
            <h1><i class="fa fa-shopping-cart"></i> Detalle Del Pedido</h1>
        </div>
    </div>
        <div class="col-md-6">
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
    <div class="col-md-6">
        <h3>Datos del Envío</h3>
        <table class="table table-striped table-hover table-bordered">
            <tr><td>Nombre:</td><td>{{Auth::user()->name2 . " " . Auth::user()->last_name2}}</td></tr>
            <tr><td>Dirección</td><td>{{Auth::user()->address2}}</td></tr>
            <tr><td>Código Postal:</td><td>{{Auth::user()->postal2}}</td></tr>
            <tr><td>Dirección:</td><td>{{Auth::user()->locality2}}</td></tr>
            <tr style="font-weight: bold"><td>Misma dirección de registro</td><td>Enviar a otra dirección</td></tr>
            <tr><td><a class="btn btn-primary"> mantener</a></td><td><buton class="btn btn-primary" ng-click="showModal()"> Cambiar</buton></td></tr>
        </table>
    </div>
        <div class="col-md-10" style="text-align: center">
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
    <hr>
    <div class="col-md-10" style="text-align: center; margin-bottom: 50px">
    <a href="{{ route('cart-show') }}" class="btn btn-primary" style="font-size: larger">
        <i class="fa fa-chevron-circle-left fa-x2"></i> Volver al carrito</a>
    <a href="" class="btn btn-primary" style="font-size: larger">
        Finalizar <i class="fa fa-paypal fa-x2"></i></a>
    </div>

    <div >
    <div class="modal" ng-show="modalShow">
        <div class="col-md-6">
        <header>
            <h3>Datos de envío</h3>
        </header>
        <form action="{{ route('updateUser') }}" method="post" enctype="multipart/form-data">
            <div class="form-group {{ $errors->has('name2') ? 'has-error' : '' }}">
                <label for="name2">Nombre</label>
                <input type="text" name="name2" class="form-control" value="{{ $user->name2 }}" id="name">
            </div>
            <div class="form-group {{ $errors->has('last_name2') ? 'has-error' : '' }}">
                <label for="last_name2">Apellidos</label>
                <input type="text" name="last_name2" class="form-control" value="{{ $user->last_name2 }}" id="last_name">
            </div>

            <div class="form-group {{ $errors->has('address2') ? 'has-error' : '' }}">
                <label for="address2">Dirección de envío</label>
                <input type="text" name="address2" class="form-control" value="{{ $user->address2 }}" id="address">
            </div>
            <div class="form-group {{ $errors->has('postal2') ? 'has-error' : '' }}">
                <label for="postal2">Código Postal</label>
                <input type="text" name="postal2" class="form-control" value="{{ $user->postal2 }}" id="address">
            </div>
            <div class="form-group {{ $errors->has('address2') ? 'has-error' : '' }}">
                <label for="locality">Localidad</label>
                <input type="text" name="locality2" class="form-control" value="{{ $user->locality2 }}" id="address">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <input type="hidden" value="{{ Session::token() }}" name="_token">
            <br>
        </form>

        <br>
    </div>
    </div>

    </div>
@endsection