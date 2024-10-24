<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Editar</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Editar Usuario</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Formulario de edición --}}
        <form action="{{ route('usuarios.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="names" class="form-label">Nombres</label>
                <input type="text" name="names" class="form-control" id="names" value="{{ $user->names }}" required>
            </div>

            <div class="mb-3">
                <label for="names" class="form-label">Apellidos</label>
                <input type="text" name="lastnames" class="form-control" id="lastnames" value="{{ $user->lastnames }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Direccion</label>
                <input type="text" name="address" class="form-control" id="address" value="{{  $user->address }}" required>
            </div>address

            <div class="mb-3">
                <label for="email" class="form-label">Contraseña</label>
                <input type="password " name="password " class="form-control" id="password " value="{{ $user->password }}" required>
            </div>


            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
        <a href="{{ route('usuarios.index') }}">IR al index</a>
    </div>

</body>
</html>
