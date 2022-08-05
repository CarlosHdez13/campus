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
    return view('hoja_ruta');
});

Route::get('/ideacion', function () {
    return view('inicio');
});
Route::get('/hoja_ruta', function () {
    return view('hoja_ruta');
});
Route::get('/inicio_tema', function () {
    return view('inicio_tema');
});
