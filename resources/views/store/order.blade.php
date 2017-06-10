@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">

                <table class="table table responsive" style="margin-top: 10%">
                    <h3>Pedido nº {{ $order->id }}{{ date('d-m-Y', strtotime($order->created_at)) }}</h3>
                    <tr class="success">
                    <th>
                        Nombre del producto
                    </th>
                    <th>
                        Cantidad
                    </th>
                    <th>
                        Precio
                    </th>
                    </tr>
                    @foreach($items as $item)
                        <tr >
                            @foreach($products as $product)
                            @if ($product->id == ($item->product_id ) )
                            <td>
                               {{$product ->name}}
                            </td>
                            @endif
                            @endforeach
                            <td>
                                {{$item ->quantity}}
                            </td>
                            <td>
                                {{$item ->price}}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection