<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\Ejercicio2Controller;
use App\Http\Controllers\NominaController;
use App\Http\Controllers\EnteroController;
use App\Http\Controllers\CilindroController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ConsultasController;
use App\Http\Controllers\StudentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Articulos',function () {
    return view ('articulos');
});
Route::get('/Clientes',function () {
    return view ('cliente');
});

//Ejercicio1//
Route::get('operaciones', [OperacionesController::class, 'index']);
Route::post('/opingreso', [OperacionesController::class, 'operaciones'])->name('operacion');

//Ejercicio2//
Route::get('/ejercicio2', [Ejercicio2Controller::class, 'index'])->name('ejercicio2');
Route::post('/resultado2', [Ejercicio2Controller::class, 'resul_ejer2'])->name('respuesta2');

//Ejercicio3//
Route::get('/nomina_octubre', [NominaController::class, 'Create'])->name('Nomina');
Route::post('/opnomina', [NominaController::class, 'Nomina'])->name('opnomina');

//Ejercicio4//
Route::get('/ejercicio4',[EnteroController::class, 'index'])->name('Entero');
Route::post('/opentero' ,[EnteroController::class, 'Entero'])->name('opentero');

//Ejercicio5//
Route::get('/figura_cilindro', [CilindroController::class, 'Create'])->name('Cilindro');
Route::post('/opcilindro', [CilindroController::class, 'Cilindro'])->name('opcilindro');

//Ejercicio6//
Route::get('/dato_estudiante', [EstudianteController::class, 'Create'])->name('Estudiante');
Route::post('/opestudiante', [EstudianteController::class, 'Estudiante'])->name('opestudiante');

//CONSULTAS//
Route::get('/consulta',[ConsultasController::class,'consultas'])->name('consulta');

//students//


Route::resource('/Students','App\Http\Controllers\StudentsController');
//Route::post('/opstudents', [StudentsController::class, 'Students'])->name('opstudents');