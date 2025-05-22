<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $operacion }} Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container mt-5">
    <h2>{{ $operacion }} Usuario</h2>
    <form action="{{ route('operaciones_usuario') }}"  method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $usuario->id }}">
        <input type="hidden" name="operacion" value="{{ $operacion }}">

        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="{{ old('email', $usuario->email) }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="Dejar vacío si no deseas cambiarlo">
        </div>

        <div class="form-group">
            <label for="idrol">Rol</label>
            <select name="idrol" id="idrol" class="form-control" required>
                @foreach($roles as $rol)
                    <option value="{{ $rol->id }}" {{ $rol->id == $usuario->idrol ? 'selected' : '' }}>{{ $rol->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success mt-3" type="submit">{{ $operacion }}</button>
    </form>
</div>
</body>
</html>