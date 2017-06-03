@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-shopping-cart"></i> Carrito de la Compra</h1>
        </div>
        @if(count($cart))
            <p>
                <a href="{{ route('cart-trash') }}" class="btn btn-danger"><i class="fa fa-trash"></i> Vaciar el Carrito</a>
            </p>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th>Quitar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cart as $item)
                    <tr>
                        <td><img src="{{$item->image }}" style="width: 10em"> </td>
                        <td>{{ $item->name }}</td>
                        <td>{{ number_format($item->price,2) }}</td>
                        <td><form class="form-horizontal" role="form" method="post" action="{{ route('cart-update', $item->slug)}}">
                                {{ csrf_field() }}
                            <input type="number" min="1" max="100"
                                   value="{{ $item->quantity }}" name="num">
                                 <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-refresh"></i> Actualiza
                                </button>
                            </form>
                        </td>
                        {{--Falta implementar el numero de elementos--}}
                        <td>{{ number_format($item->price * $item->quantity,2) }}</td>
                        <td>
                            <a href="{{ route('cart-delete', $item->slug) }}" class="btn btn-danger">
                                <i class="fa fa-remove"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    <tr style="font-weight: bold;border-top: black 5px solid ">
                        <td>
                            <h3 style="font-weight: bold">Total</h3>
                        </td>
                        <td></td><td></td><td></td><td></td>
                        <td>
                            <h3>{{ number_format($total,2) }} €</h3>
                        </td>

                    </tr>
                </tbody>
            </table>
            <hr>
            <a href="{{ route('store') }}" class="btn btn-primary"><i class="fa fa-chevron-circle-left"></i> Seguir comprando</a>
            <a href="{{ route('order-detail') }}" class="btn btn-primary">Procesar pedido <i class="fa fa-chevron-circle-right"></i></a>
        </div>

            @else
        <h3 class="mensaje-alerta span label label-warning">Tu carrito está vacío.</h3>
        @endif
    </div>
@endsection