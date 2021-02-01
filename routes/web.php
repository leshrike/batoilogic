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

/* Ruta del middleware */

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/* Ruta de los recursos -- Controladores */

Route::resource('order','orderController');

Route::resource('provider','providerController');

Route::resource('User','userController');

Route::resource('product','productController');



/* Ruta del Home de Batoilogic  */

Route::get('/', function () {
    return view('home');
})->name('home');

/** Rutas de pedidos Batoilogic */

Route::get('/pedidos','orderController@index');

/** Rutas de proveedores Batoilogic */

Route::get('/proveedores','providerController@index'); //mostrar la lista de proveedores

Route::get('/proveedores/{id}','providerController@show'); //mostrar un proveedor

Route::get('/proveedores/crear','providerController@create'); // crear un proveedor nuevo

Route::get('/proveedores/{id}/editar','providerController@edit'); //editar un proveedor

Route::delete('/proveedores/{id}/eliminar','providerController@destroy');//eliminar un proveedor

Route::put('/proveedores/{id}/update','providerController@update'); //efectuar la actualizacion de los datos de un proveedor




/** PRODUCTOS --- Batoilogic */

Route::get('/productos','productController@index'); //mostrar lista de productos

Route::get('/productos/{id}','productController@show'); //mostrar un producto

Route::get('/productos/crear','productController@create'); // crear un producto nuevo

Route::get('/productos/{id}/editar','productController@edit'); //editar un producto

Route::delete('/productos/{id}/eliminar','productController@destroy');//eliminar un producto

Route::put('/productos/{id}/update','productController@update'); //efectuar la actualizacion de los datos de un producto

