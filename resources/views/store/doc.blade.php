<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Documentación del Pedido</title>
</head>
<body>
<div class="container text-center">
    <div class="page-header">
        <h1><i class="fa fa-shopping-cart"></i> Detalle Del Pedido En JaviShop</h1>
    </div>

    <div class="col-md-6">
        <h3>Datos del usuario</h3>
        <table class="table table-striped table-hover table-bordered">
            <tr><td>Nombre:</td><td>{{Auth::user()->name . " " . Auth::user()->last_name}}</td></tr>
            <tr><td>Usuario:</td><td>{{Auth::user()->user}}</td></tr>
            <tr><td>Correo:</td><td>{{Auth::user()->email}}</td></tr>
            <tr><td>Dirección</td><td>{{Auth::user()->address}}</td></tr>
            <tr><td>Código Postal:</td><td>{{Auth::user()->postal}}</td></tr>
            <tr><td>Localidad:</td><td>{{Auth::user()->locality}}</td></tr>
        </table>
    </div>
    <div class="col-md-6">
        <h3>Datos del Envío</h3>
        <table class="table table-striped table-hover table-bordered">
            <tr><td>Nombre:</td><td>{{Auth::user()->name2 . " " . Auth::user()->last_name2}}</td></tr>
            <tr><td>Dirección</td><td>{{Auth::user()->address2}}</td></tr>
            <tr><td>Código Postal:</td><td>{{Auth::user()->postal2}}</td></tr>
            <tr><td>Localidad:</td><td>{{Auth::user()->locality2}}</td></tr>
            <tr><td></td></tr>
        </table>
    </div>
    <div class="col-md-10 col-md-offset-1" style="text-align: center">
        <h3>Datos del pedido</h3>
        <table class="table table-striped table-hover table-bordered">
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
            <input type="hidden" value="{{$vartot=0}}">
            @foreach($cart as $item)
                <tr style="text-align: center">
                    <td>{{$item->name}}</td>
                    <td>{{number_format($item->price,2)}}€</td>
                    <td >{{$item->quantity}}</td>

                   <input type="hidden" value="{{$var=$item->price * $item->quantity}}">

                    <td>{{number_format($var,2)}}€</td>

                    <input type="hidden" value="{{$vartot=$var+$vartot}}">
                </tr>
            @endforeach
            <tr>
                <td><h3>Total</h3></td>
                <td></td>
                <td></td>
                <td>{{number_format($vartot,2)}}</td>
            </tr>

        </table>
    </div>
    <hr>

</div>

</body>
</html>