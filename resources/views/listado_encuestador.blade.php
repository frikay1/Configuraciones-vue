@extends('app.master')
@section('titulo')
Jugadores
@endsection
@section('contenido')
<h2 class="text-center">Listado de Jugadores</h2>
<div class="row mb-3">
    <div class="col-md-12 text-right">
        <form action="{{ action([App\Http\Controllers\JugadorController::class, 'formulario']) }}" method="GET">
            <button class="btn btn-info" type="submit">Agregar Jugador</button>
        </form>
    </div>
</div>
<table class="table table-striped table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Id usuario</th>
            <th>Foto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Jugadores as $jugador)
        <tr>
            <td>
                <a href="{{ action([App\Http\Controllers\JugadorController::class, 'formulario'], ['id' => $jugador->id]) }}">
                    {{ $jugador->id }}
                </a>
            </td>
            <td>
                <a href="{{ action([App\Http\Controllers\JugadorController::class, 'formulario'], ['id' => $jugador->id]) }}">
                    {{ $jugador->nombre }}
                </a>
            </td>
            <td>
                <a href="{{ action([App\Http\Controllers\JugadorController::class, 'formulario'], ['id' => $jugador->id]) }}">
                    {{ $jugador->idusuario }}
                </a>
            </td>
            <td>
                @if ($jugador->foto)
                <img src="{{ asset('storage/imagenesjugador/' . $jugador->foto) }}" class="img-fluid" alt="Foto de {{ $jugador->nombre }}" width="100">
                @else
                <img src="{{ asset('images/default.png') }}" class="img-fluid" alt="Sin imagen" width="100">
                @endif
            </td>
            <td>
                <form action="{{ action([App\Http\Controllers\JugadorController::class, 'operaciones']) }}" method="POST" style="display:inline;">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $jugador->id }}">
                    <input type="hidden" name="operacion" value="Eliminar">
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection