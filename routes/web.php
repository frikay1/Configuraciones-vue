<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\PermisosController;
use App\Http\Controllers\RolxPermisoController;
use App\Http\Controllers\EncuestadorController;

use App\Http\Controllers\LoginController;

//Route::get('/', function () {
   // return view('welcome');

    
//});

Route::get('/', function () {
    return view('vue');

    
});

Route::get('/listado_usuario', [UsuarioController::class, 'listado'])->name('index_usuario');
Route::get('/formulario_usuario/{id?}', [UsuarioController::class, 'formulario'])->name('formulario_usuario');
Route::post('/operaciones_usu', [UsuarioController::class, 'operaciones'])->name('operaciones_usuario');
Route::get('/propiedad/{nombre_foto}', [UsuarioController::class, 'mostrar_foto'])->name('mostrar_foto');

Route::get("/listado_rol", [RolController::class, "listado"])->name('index_rol');
Route::get("/formulario_roles", [RolController::class, "formulario"])->name('formulario_roles');
Route::post("/operaciones_usuario", [RolController::class, "operaciones"])->name('operaciones_rol');

//Ruta RolxPermiso
Route::get('/rol-permiso/formulario/{id}', [RolxPermisoController::class, 'formulario']);
Route::post('/rol-permiso/save', [RolxPermisoController::class, 'save']);

//Ruta de permisos
Route::get("/listado_permisos", [PermisosController::class, "listado"])->name('index_permisos');//->middleware('candado2:GESTPER');
Route::get("/formulario_permisos/{id?}", [PermisosController::class, "formulario"])->name('formulario_permisos');//->middleware('candado2:GESTPER');
Route::post("/operaciones_permisos", [PermisosController::class, "operaciones"])->name('operaciones_permisos');






// Rutas JUGADOR
Route::post("/operaciones_usuario", [UsuarioController::class, "operaciones"])->name('operaciones_usuario');
Route::get('/registro', [EncuestadorController::class, 'mostrarFormulario'])->name('registro');


// Ruta de Autoregistro
Route::get('/encuestador/registro', [EncuestadorController::class, 'mostrarFormulario'])->name('formulario_registro');
Route::post('/encuestador/registro', [EncuestadorController::class, 'registro'])->name('registro');

// Rutas de Login
//Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/cerrar_sesion', [LoginController::class, 'cerrar_sesion'])->name('cerrar.sesion');
Route::post('/login', [LoginController::class, 'iniciar_sesion']);


// Vistas devueltas por Redirect
Route::get("/home/encuestador", [EncuestadorController::class, "home"])->name('home_encuestador');
Route::get("/home/administrador", [UsuarioController::class, "home"]);







