<?php

use App\Http\Controllers\ciclesController;
use App\Clases\Cicle;
use App\Clases\Curs;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\saludoController;

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

// Route::get('/', [App\Http\Controllers\saludoController::class, 'inicio']);
// Route::post('/saludo', [saludoController::class, 'saludo']);

// Route::get('/', function () {
//     return view('index');
// });
// Route::post('/cicles', function () {
//     $cicles = [
//         new Curs(1, 'DAW', 'Desenvolupament Aplicacions Web'),
//         new Curs(2, 'DAM', 'Desenvolupament Aplicacions Multiplataforma'),
//     ];

//     return view('cicles.index', ['cicles' => $cicles]);
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/cicle', function(){
    $cicles = [
        new Cicle(1, 'DAW', 'Desarrollo de aplicacioens web'),
        new Cicle(2, 'DAM', 'Desarrollo de aplicaciones multiplataforma')
    ];
    return view('cicles.index', ['cicles' => $cicles]);
    
});

Route::get('/curs', function(){
    $cursos = [
        new Curs(1, 'DAW1A', 'Desenvolupament Aplicacions Web de primer matí A', 'DAW'),
        new Curs(2, 'DAW1B', 'Desenvolupament Aplicacions Web de primer matí B', 'DAW'),
        new Curs(2, 'DAW2A', 'Desenvolupament Aplicacions Web de segon matí A', 'DAW'),
        new Curs(3, 'DAM2B', 'Desenvolupament Aplicacions Web de segon matí B', 'DAW')
    ];
    return view('curs.index', ['cursos' => $cursos]);
});

// Route::get('/prova/{n1}/{n2}', function($n1, $n2) {
//     return "La suma de los numeros es " . $n1 + $n2;
// })->name('suma');

// Route::get('/saludo', function(){
//     $data['nombre'] = 'Filip';
//     $data['apellidos'] = 'Rendón Toneva';
//     return view('saludo', $data);
// });