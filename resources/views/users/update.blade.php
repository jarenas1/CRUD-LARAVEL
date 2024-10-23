<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar</title>
</head>
<body>
    <form action="">
        <input type="text" id="name" placeholder="Nombre">
        <input type="text" id="lastname" placeholder="Apellido">
        <input type="text" id="email" placeholder="Correo">
        <input type="text" id="adress" placeholder="Direccion">

        <button type="submit">Modificar</button>
    </form>

    <a href="{{ route('usuarios.index') }}"> Volver al home</a>
</body>
</html>