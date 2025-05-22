<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="row">
    <div class="col-md-12">
        <form action="{{ action([App\Http\Controllers\RolController:: class, 'operaciones']) }}"
            enctype="multipart/form-data"
            method="POST">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$Rol->id}}" />
            <input type="hidden" name="operacion" value="{{$operacion}}" />


            <label for="">Rol nuevo:</label>
            <input class="form-control" type="text" name="nombre" value="{{$Rol->nombre}}" />


            <button class="btn btn-success" type="submit">{{$operacion}}</button>
        </form>
    </div>
</div>
</div>

    
</body>
</html>