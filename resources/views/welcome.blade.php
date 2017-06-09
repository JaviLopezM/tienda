@extends('layouts.app')

@section('content')
    @if(\Session::has('message'))
        @include('store.partials.message')
    @endif

    {{--@include('store.partials.nav')--}}
    @include('store.partials.slider')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

        </div>
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido</div>

                <div class="panel-body">
                    Esta es una aplicación de prueba y los contenidos no son reales.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
