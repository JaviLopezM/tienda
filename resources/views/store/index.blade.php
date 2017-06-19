@extends('layouts.app')

@section('content')
    <ul id="navigation">
        <li class="Imagen2"><a href="#marvel" title="Marvel"><h4>Comic Marvel</h4></a></li>
        <li class="Imagen3"><a href="#dc" title="DC"><h4>Cómic DC</h4></a></li>
    </ul>
    <div class="container">
        <div class="row" id="products">
            <a name="marvel" ><br/><br/></a>
            <h3>Comic Marvel</h3>
            @foreach($cat1 as $product)
                <div class="col-md-4 white-panel Mjgb">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>{{ $product -> name }}</h4></div>
                        <div class="panel-body">
                            <img src="{{$product->image}}" style="height: 18em">
                        </div>
                        <div class="panel-body texto mj">
                            {{$product->extract}}
                        </div>
                        <div class="panel-body" style="font-weight:bold; text-align: right">
                            <h3>{{$product->price}}€</h3><hr>
                            <a href="{{ route('cart-add', $product->slug) }}" class="btn btn-danger"><i class="fa fa-cart-plus"></i> Añadir al carrito</a>
                            <a href="{{route('product-detail' , $product->slug)}}" class="btn btn-primary"><i class="fa fa-chevron-circle-right"></i>  Leer más</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <a name="dc" ><br/><br/></a>
            <h3>Comic DC</h3>
        </div>
        <div class="row" id="products">
            @foreach($cat2 as $product)
                <div class="col-md-4 white-panel Mjgb">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>{{ $product -> name }}</h4></div>
                        <div class="panel-body">
                            <img src="{{$product->image}}" style="height: 21em">
                        </div>
                        <div class="panel-body texto mj">
                            {{$product->extract}}
                        </div>
                        <div class="panel-body" style="font-weight:bold; text-align: right">
                            <h3>{{$product->price}}€</h3><hr>
                            <a href="{{ route('cart-add', $product->slug) }}" class="btn btn-danger"><i class="fa fa-cart-plus"></i> Añadir al carrito</a>
                            <a href="{{route('product-detail' , $product->slug)}}" class="btn btn-primary"><i class="fa fa-chevron-circle-right"></i>  Leer más</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
