<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<div class="row">
    <div class="col-md-12">
        <form action="{{ action([App\Http\Controllers\PermisosController::class, 'operaciones']) }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $Permisos->id }}" />
            <input type="hidden" name="operacion" value="{{ $operacion }}" />

            <label for="">Nombre:</label>
            <input class="form-control" type="text" name="nombre" value="{{ $Permisos->nombre ?? '' }}" />
            <label for="">Clave:</label>
            <input class="form-control" type="text" name="clave" value="{{ $Permisos->clave ?? '' }}" />

            <button class="btn btn-success" type="submit">{{ $operacion }}</button>
        </form>
    </div>
</div>

</head>
<body>
    
</body>
</html>