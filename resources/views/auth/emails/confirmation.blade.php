<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmación</title>
</head>
<body>
<h4>Gracias por registrarte en mi sitio web.</h4>
<p>
    Para finalizar el registro es necesario que confirmes tu correo haciendo click en el siguiente enlace: <br/>
    <a href='{{ url("register/confirm/{$user->token}") }}'>Link de confirmación.</a>
</p>
<p>
    Deseamos que la experiencia sea de su agrado.
</p>


</body>
</html>
