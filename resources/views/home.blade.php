@extends('layouts.app')

@section('content')
    <section class="row new-post">
        <header>
            <h3 style="margin-left: 16px">Perfil de {{ $user->name }}</h3>
        </header>
        <div class="col-md-offset-2">
            <section class="row new-post">

            <div class="col-md-4" style="float: left; margin-top: 5em; ">
                <img src="/images/default.jpg" class="img-rounded " width="200" height="200" >
            </div>

            <div class="col-md-6">
                <header>
                    <h3>Datos del perfil</h3>
                </header>
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name">name</label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}" id="name">
                    </div>
                    <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                        <label for="last_name">last_name</label>
                        <input type="text" name="last_name" class="form-control" value="{{ $user->last_name }}" id="last_name">
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email">Correu</label>
                        <input type="text" name="email" class="form-control" value="{{ $user->email }}" id="email">
                    </div>

                    <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                        <label for="adreca">Dirección</label>
                        <input type="text" name="address" class="form-control" value="{{ $user->address }}" id="address">
                    </div>
                    {{--Preparo per poder pujar imatge de perfil--}}

                    {{--<div class="form-group">--}}
                    {{--<label for="imagen">Imagen </label>--}}
                    {{--<input type="file" name="imagen" class="form-control" id="imagen">--}}
                    {{--</div>--}}

                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                    <br>
                </form>

                <br>
                {{--{!! Form::open(['method' => 'POST','route' => ['eliminar', $user->id]]) !!}--}}
                {{--{!! csrf_field() !!}--}}
                {{--{!! Form::submit('Dar de baja', ['class' => 'btn btn-danger']) !!}--}}
                {{--{!! Form::close() !!}--}}
            </div>

        </div>
    </section>

@endsection
