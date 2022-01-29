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
    return view('index');
})->name('index');

Route::get('/red', function () {
    return view('red');
})->name('red');



Route::get('/concepto', function () {
    return view('cliente.concepto');
})->name('conceptoCliente');

Route::get('/diagramacion', function () {
    return view('cliente.diagramacion');
})->name('diagramacion');

Route::get('/sistemas', function () {
    return view('cliente.sistemas');
})->name('sistemas');



Route::get('/conceptos', function () {
    return view('informacion.conceptos');
})->name('conceptosInfo');

Route::get('/evolucion', function () {
    return view('informacion.evolucion');
})->name('evolucion');



Route::get('/computadoras', function () {
    return view('sistemas.computadoras');
})->name('computadoras');

Route::get('/conexion', function () {
    return view('sistemas.conexion');
})->name('conexion');

Route::get('/info', function () {
    return view('sistemas.informacion');
})->name('info');
