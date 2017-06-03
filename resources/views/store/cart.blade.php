@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="age-header">
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
                        <td>
                            <input type="number" min="1" max="100" value="{{ $item->quantity }}" id="product_{{$item->id}}">
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
                </tbody>
            </table>
        </div>
            @else
        <h3 class="mensaje-alerta span label label-warning">Tu carrito está vacío.</h3>
        @endif
    </div>
@endsection