@extends('layouts.app')

@section('content')
    @if(\Session::has('message'))
        @include('store.partials.message')
    @endif
    @include('partials.flash')
    {{--@include('store.partials.nav')--}}
    @include('store.partials.slider')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

        </div>
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3>Últimas novedades</h3>
            </div>

            <div class="panel-body">
                @foreach($products as $product)
                    @if ($product==$products->last() )
                        <div class="col-md-4 white-panel">
                                <div class="panel-heading"><h4></h4>{{ $product -> name }}</div>
                                <div class="panel-body">
                                    <img src="{{$product->image}}" style="height: 300px">
                                </div>
                                <div class="panel-body">
                                    {{$product->extract}}
                                </div>
                                <div class="panel-body" style="font-weight:bold; text-align: right">
                                    {{$product->price}}€<hr>
                                    <a href="{{ route('cart-add', $product->slug) }}" class="btn btn-danger"><i class="fa fa-cart-plus"></i> Añadir al carrito</a>
                                    <a href="{{route('product-detail' , $product->slug)}}" class="btn btn-primary"><i class="fa fa-chevron-circle-right"></i>  Leer más</a>
                                </div>
                        </div>
                    @endif
                    @if ($product->id == ($products->last()->id -1) )
                            <div class="col-md-4 white-panel">

                                    <div class="panel-heading">{{ $product -> name }}</div>
                                    <div class="panel-body">
                                        <img src="{{$product->image}}" style="height: 300px">
                                    </div>
                                    <div class="panel-body">
                                        {{$product->extract}}
                                    </div>
                                    <div class="panel-body" style="font-weight:bold; text-align: right">
                                        {{$product->price}}€<hr>
                                        <a href="{{ route('cart-add', $product->slug) }}" class="btn btn-danger"><i class="fa fa-cart-plus"></i> Añadir al carrito</a>
                                        <a href="{{route('product-detail' , $product->slug)}}" class="btn btn-primary"><i class="fa fa-chevron-circle-right"></i>  Leer más</a>
                                    </div>
                            </div>
                    @endif
                    @if ($product->id == ($products->last()->id -2) )
                            <div class="col-md-4 white-panel">


                                    <div class="panel-heading">{{ $product -> name }}</div>
                                    <div class="panel-body">
                                        <img src="{{$product->image}}" style="height: 300px">
                                    </div>
                                    <div class="panel-body">
                                        {{$product->extract}}
                                    </div>
                                    <div class="panel-body" style="font-weight:bold; text-align: right">
                                        {{$product->price}}€<hr>
                                        <a href="{{ route('cart-add', $product->slug) }}" class="btn btn-danger"><i class="fa fa-cart-plus"></i> Añadir al carrito</a>
                                        <a href="{{route('product-detail' , $product->slug)}}" class="btn btn-primary"><i class="fa fa-chevron-circle-right"></i>  Leer más</a>
                                    </div>
                            </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection
