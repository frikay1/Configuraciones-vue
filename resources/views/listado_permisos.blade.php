<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h2 class="text-center">Listado de Permisos</h2>
<div class="row mb-3">
    <div class="col-md-12 text-right">
        <form action="{{ action([App\Http\Controllers\PermisosController::class, 'formulario']) }}" method="GET">
            <button class="btn btn-info" type="submit">Agregar Permisos</button>
        </form>
    </div>
</div>
<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Clave</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Permisos as $permiso)
        <tr>
            <td>
                <a href="{{ action([App\Http\Controllers\PermisosController::class, 'formulario'], ['id' => $permiso->id]) }}">
                    {{ $permiso->id }}
                </a>
            </td>
            <td>
                <a href="{{ action([App\Http\Controllers\PermisosController::class, 'formulario'], ['id' => $permiso->id]) }}">
                    {{ $permiso->nombre }}
                </a>
            </td>
            <td>
                <a href="{{ action([App\Http\Controllers\PermisosController::class, 'formulario'], ['id' => $permiso->id]) }}">
                    {{ $permiso->clave }}
                </a>
            </td>
            <td>
                <form action="{{ action([App\Http\Controllers\PermisosController::class, 'operaciones']) }}" method="POST" style="display:inline;">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $permiso->id }}">
                    <input type="hidden" name="operacion" value="Eliminar">
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

    
</body>
</html>