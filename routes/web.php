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

/* Ruta del Home de Batoilogic  */

Route::get('/', function () {
    return view('home');
})->name('home');


/** Rutas de pedidos Batoilogic */

Route::get('/pedidos','OrdersController@index');

/** Rutas de proveedores Batoilogic */

Route::get('/proveedores','ProvidersController@index');

/** Rutas de productos Batoilogic */

Route::get('/productos','ProductsController@index');



Route::resource('product','ProductsController');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');