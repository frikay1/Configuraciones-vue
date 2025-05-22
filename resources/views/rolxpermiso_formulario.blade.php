<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rolxpermiso</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .welcome-card {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="class-body">
            <form action="{{ action([App\Http\Controllers\RolxPermisoController::class, 'save']) }}" method="POST">
                @csrf
                <input type="hidden" name="idrol" value="{{$id}}">
                <div class="col-md-6 text-center">
                    <div class="welcome-card">
                        <table class="table table-bordered">
                            @foreach($permisos as $permiso)
                            <tr>
                                <?php
                                $ch = '';
                                if ($permiso->asignado == true)
                                    $ch = 'checked';
                                ?>
                                <td>
                                    <input {{$ch}} type="checkbox" name="idpermiso[]" value="{{$permiso->id}}"> <!-- Agregar name para recibir múltiples permisos -->
                                </td>
                                <td>{{$permiso->nombre}}</td>
                                <td>{{$permiso->clave}}</td>
                            </tr>
                            @endforeach
                        </table>
                        <button type="submit" class="btn btn-success">Asignar Permisos</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>