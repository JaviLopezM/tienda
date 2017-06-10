@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-shopping-cart"></i> Detalle Del Pedido</h1>
        </div>

        <div class="col-md-6">
            <h3>Datos del usuario</h3>
            <table class="table table-striped table-hover table-bordered">
                <tr><td>Nombre:</td><td>{{Auth::user()->name . " " . Auth::user()->last_name}}</td></tr>
                <tr><td>Usuario:</td><td>{{Auth::user()->user}}</td></tr>
                <tr><td>Correo:</td><td>{{Auth::user()->email}}</td></tr>
                <tr><td>Dirección</td><td>{{Auth::user()->address}}</td></tr>
                <tr><td>Código Postal:</td><td>{{Auth::user()->postal}}</td></tr>
                <tr><td>Localidad:</td><td>{{Auth::user()->locality}}</td></tr>
            </table>
        </div>
    <div class="col-md-6">
        <h3>Datos del Envío</h3>
        <table class="table table-striped table-hover table-bordered">
            <tr><td>Nombre:</td><td>{{Auth::user()->name2 . " " . Auth::user()->last_name2}}</td></tr>
            <tr><td>Dirección</td><td>{{Auth::user()->address2}}</td></tr>
            <tr><td>Código Postal:</td><td>{{Auth::user()->postal2}}</td></tr>
            <tr><td>Localidad:</td><td>{{Auth::user()->locality2}}</td></tr>
            <tr style="font-weight: bold"><td>Misma dirección de registro</td><td>Enviar a otra dirección</td></tr>
            <tr><td><a class="btn btn-primary" href="{{ route('keep') }}"> mantener</a></td><td>
                    <button class="btn btn-primary"  id="myBtn"> Cambiar</button>

                </td></tr>
        </table>
    </div>
        <div class="col-md-10 col-md-offset-1" style="text-align: center">
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
                <tr>
                    <td>
                        Gastos de envío
                    </td>
                    <td>{{$ship}} €</td>
                </tr>
                <tr style="font-weight: bold;border-top: black 5px solid ">
                    <td>
                        <h3 style="font-weight: bold">Total</h3>
                    </td>
                    <td></td><td></td>
                    <td>
                        <h3>{{ number_format($ship+$total,2) }} €</h3>

                    </td>
                </tr>
            </table>
        </div>
    <hr>
    <div class="col-md-10" style="text-align: center; margin-bottom: 50px">
    <a href="{{ route('cart-show') }}" class="btn btn-primary" style="font-size: larger">
        <i class="fa fa-chevron-circle-left fa-x2"></i> Volver al carrito</a>
    <a href="{{ route('payment') }}" class="btn btn-primary" style="font-size: larger">
        Finalizar <i class="fa fa-paypal fa-x2"></i></a>
    </div>
        {{--W3--}}

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Cambiar datos de envío</h4>
                    </div>
                    <div class="row">
                    <div class="modal-body col-md-6 col-md-offset-3">
                        <form action="{{ route('updateShipping') }}" method="post" enctype="multipart/form-data">
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
                                <input type="text" pattern="[0-9]{5}" name="postal2" class="form-control" value="{{ $user->postal2 }}" id="address">
                            </div>
                            <div class="form-group {{ $errors->has('locality2') ? 'has-error' : '' }}">
                                <label for="locality2">Localidad</label>
                                <input type="text" name="locality2" class="form-control" value="{{ $user->locality2 }}" id="address">
                            </div>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            <input type="hidden" value="{{ Session::token() }}" name="_token">
                            <br>
                        </form>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>

            </div>
        </div>


    </div>




@endsection