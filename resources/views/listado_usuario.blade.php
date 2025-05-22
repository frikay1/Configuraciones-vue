<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Listado de Usuarios</h2>
    <div class="text-right mb-3">
        <a href="{{ route('formulario_usuario') }}" class="btn btn-info">Agregar Usuario</a>
    </div>

    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($usuarios as $usuario)
                <tr>
                    <td>
                        <a href="{{ route('formulario_usuario', ['id' => $usuario->id]) }}">
                            {{ $usuario->id }}
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('formulario_usuario', ['id' => $usuario->id]) }}">
                            {{ $usuario->email }}
                        </a>
                    </td>
                    <td>{{ $usuario->nombre_rol }}</td>
                    <td>
                        
                    
                        <form action="{{ route('operaciones_usuario') }}" method="POST" style="display:inline;">
                            @csrf
                            <input type="hidden" name="id" value="{{ $usuario->id }}">
                            <input type="hidden" name="operacion" value="Eliminar">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No hay usuarios registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
</body>
</html>