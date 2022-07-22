<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/sesion', function () {
    return view('sesion');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/registrar', function () {
    return view('registrar');
});

Route::get('/asignar', function () {
    return view('asignar');
});

Route::get('/consultar', function () {
    return view('consultar');
});

Route::get('/eliminar', function () {
    return view('eliminar');
});

Route::get('/actualizar', function () {
    return view('actualizar');
});