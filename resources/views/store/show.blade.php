@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
                 <div class="col-md-5 col-md-offset-1 center">
                    <div class="panel panel-default">

                        <div class="panel-body center">
                            <img src="{{$product->image}}"  style="height: 400px">
                        </div>

                    </div>
                 </div>
                     <div class="col-md-5 ">
                         <div class="panel panel-default">
                             <div class="panel-heading"><h3>{{ $product -> name }}</h3></div>
                             <div class="panel-body">
                                 {{$product->description}}
                             </div>
                             <div class="panel-body" style="font-weight:bold; text-align: right">
                                 <h3>{{number_format($product->price,2)}}€</h3> <br/>
                                 <a href="{{ route('cart-add', $product->slug) }}" class="btn btn-warning">Añadir al carrito</a>
                                 <a href="/" class="btn btn-primary">ir al inicio</a>
                             </div>
                         </div>
                         </div>

                     </div>
                </div>

        </div>
    </div>
@endsection