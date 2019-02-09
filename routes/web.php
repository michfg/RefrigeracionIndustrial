<?php

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



Route::get('/menuServicio', function () {
    return view('menuServicio');
});

Route::get('/sucursales', function () {
    return view('Sucursales');
});

Route::get('/lavadoInteriores', function () {
    return view('lavadoInteriores');
});


Route::get('/ServicioMantenimientoCompresores', function () {
    return view('ServicioMantenimientoCompresores');
});				
				
Route::get('/rehabilitadoMaquinaria', function () {
    return view('rehabilitadoMaquinaria');
});

Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/Ayuda', function () {
    return view('preguntasFrecuentes');
});

Route::get('/QuienesSomos', function () {
    return view('quienesSomos');
});