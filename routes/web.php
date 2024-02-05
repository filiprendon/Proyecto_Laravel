<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\saludoController::class, 'inicio']);
Route::post('/saludo', [App\Http\Controllers\saludoController::class, 'saludo']);

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/prova/{n1}/{n2}', function($n1, $n2) {
//     return "La suma de los numeros es " . $n1 + $n2;
// })->name('suma');

// Route::get('/saludo', function(){
//     $data['nombre'] = 'Filip';
//     $data['apellidos'] = 'Rendón Toneva';
//     return view('saludo', $data);
// });