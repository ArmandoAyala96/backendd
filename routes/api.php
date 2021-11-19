<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\MatriculasAlumnosController;
use App\Http\Controllers\AlumnoController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::get('/ObtenerMatriculas', [TestController::class, 'obtenerMatriculas']);
Route::get('/ObtenerMatriculas', [MatriculasAlumnosController::class, 'obtenerMatriculas']);
Route::post('/Insert', [MatriculasAlumnosController::class, 'AgregarMatricula']);
Route::post('/UpdateMatricula', [MatriculasAlumnosController::class, 'ModificarMatricula']);
Route::post('/Delete', [TestController::class, 'Eliminar']);

Route::get('/ObtenerAlumnos', [AlumnoController::class, 'ObtenerAlumnos']);
Route::post('/InsertAlumnos', [AlumnoController::class, 'Agregar']);
Route::post('/UpdateAlumnos', [AlumnoController::class, 'Modificar']);
Route::post('/DeleteAlumnos', [AlumnoController::class, 'Eliminar']);

Route::get('/ObtenerCursos', [AlumnoController::class, 'ObtenerCursos']);
Route::get('/ObtenerEstadoCurso', [AlumnoController::class, 'ObtenerEstadoCurso']);



Route::get('/ObtenerNotas', [NotaController::class, 'obtenerItems']);
Route::post('/InsertNotas', [NotaController::class, 'Agregar']);
Route::post('/UpdateNotas', [NotaController::class, 'Modificar']);
Route::post('/DeleteNotas', [NotaController::class, 'Eliminar']);
