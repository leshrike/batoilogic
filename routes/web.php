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


Route::resource('order','orderController');

Route::resource('provider','providerController');

Route::resource('User','userController');

Route::resource('product','productController');

Route::get('/', function () {
    return view('home');
})->name('home');


/** Rutas de pedidos Batoilogic */

Route::get('/pedidos','orderController@index');

/** Rutas de proveedores Batoilogic */

Route::get('/proveedores','providerController@index');

/** Rutas de productos Batoilogic */

Route::get('/productos','productController@index');






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');