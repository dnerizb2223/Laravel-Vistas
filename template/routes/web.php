<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CicleController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/saludo/{nombre?}', function ($nombre = "david"){
//     return "Hola " . $nombre;
// })->name('saludo');

// Route::get('/rutes/public/parametre/{num1}/{num2}', function ($num1, $num2) {
//     $suma = $num1 + $num2;
//     return "La suma de $num1 i $num2 és: $suma";
// })->name('suma');
    

Route::get('/ABP_david_neriz/public/', function () {
    return View::make('layouts.principal');
});

Route::get('/ABP_david_neriz/public/cicles', function () {
    $cicles = [
        ['id' => 1, 'sigles' => 'DAW', 'nom' => 'Desenvolupament Aplicacions Web'],
        ['id' => 2, 'sigles' => 'DAM', 'nom' => 'Desenvolupament Aplicacions Multiplataforma'],
    ];

    return View::make('cicles.index', compact('cicles'));
});

Route::get('/ABP_david_neriz/public/cursos', function () {
    $cursos = [
        ['id' => 1, 'sigles' => 'DAW1A', 'nom' => 'Desenvolupament Aplicacions Web de primer matí A', 'siglesCicle' => 'DAW'],
        ['id' => 2, 'sigles' => 'DAW2A', 'nom' => 'Desenvolupament Aplicacions Web de segon matí A', 'siglesCicle' => 'DAW'],
        ['id' => 3, 'sigles' => 'DAW2B', 'nom' => 'Desenvolupament Aplicacions Web de segon matí B', 'siglesCicle' => 'DAW'],
    ];

    return View::make('cursos.index', compact('cursos'));
});

Route::resource('cicle', CicleController::class);