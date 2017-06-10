@extends('layouts.app')

@section('content')
    <section class="row" style=" margin-bottom: 50px">
        <header style="text-align: left">
            <h3 style="margin-left:100px">Perfil de {{ $user->user }}</h3>
        </header>
        <div class="row new-post">
            <div class="col-xs-10 col-xs-offset-1 col-md-2 col-md-offset-2 " style="margin-top: 5em; ">
                <img src="/images/default.jpg" class="img-rounded ">

                <table>
                    <th>
                        Historial de Pedidos
                    </th>
                    @foreach($orders as $order)
                        <tr>
                            <td>
                             <a href="{{route('order',$order ->id)}}">{{$order ->id}} - {{$order->created_at}}</a>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>


            <div class="col-xs-10 col-xs-offset-1 col-md-6 form">
                <header>
                    <h3>Datos del perfil</h3>
                </header>
                <form action="{{ route('updateUser') }}" method="post" enctype="multipart/form-data">
                    <div class="form-group {{ $errors->has('user') ? 'has-error' : '' }}">
                        <label for="user">Usuario</label>
                        <input type="text" name="user" class="form-control" value="{{ $user->user }}" id="user" disabled>
                    </div>
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}" id="name">
                    </div>
                    <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                        <label for="last_name">Apellidos</label>
                        <input type="text" name="last_name" class="form-control" value="{{ $user->last_name }}" id="last_name">
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email">e-Mail</label>
                        <input type="text" name="email" class="form-control" value="{{ $user->email }}" id="email" disabled>
                    </div>

                    <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                        <label for="address">Dirección</label>
                        <input type="text" name="address" class="form-control" value="{{ $user->address }}" id="address">
                    </div>
                    <div class="form-group {{ $errors->has('postal') ? 'has-error' : '' }}">
                        <label for="postal">Código Postal</label>
                        <input type="text" name="postal" class="form-control" value="{{ $user->postal }}" id="postal">
                    </div>
                    <div class="form-group {{ $errors->has('locality') ? 'has-error' : '' }}">
                        <label for="locality">Localidad</label>
                        <input type="text" name="locality" class="form-control" value="{{ $user->locality }}" id="locality">
                    </div>

                    {{--Preparo per poder pujar imatge de perfil--}}

                    {{--<div class="form-group">--}}
                    {{--<label for="imagen">Imagen </label>--}}
                    {{--<input type="file" name="imagen" class="form-control" id="imagen">--}}
                    {{--</div>--}}
                    <div style="float: right; margin-left: 20px">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                    </div>
                </form>
                <div style="text-align:right">

                {!! Form::open(['method' => 'POST','route' => ['eliminar', $user->id]]) !!}
                {!! csrf_field() !!}
                <button type="submit" onclick="return confirm('Está seguro de eliminar su cuenta?')"
                class="btn btn-danger">Dar de baja</button>

                {!! Form::close() !!}
                </div>

            </div>


        </div>

    </section>

@endsection
