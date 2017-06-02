@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-4 ">
                <div class="panel panel-default">

                        <div class="panel-heading">{{ $product -> name }}</div>
                            <div class="panel-body">
                                <img src="{{$product->image}}" style="height: 300px">
                            </div>
                    <div class="panel-body">
                        {{$product->extract}}
                    </div>
                    <div class="panel-body" style="font-weight:bold; text-align: right">
                        {{$product->price}}€
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
