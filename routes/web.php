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

// Route::middleware(['auth:sanctum','verified'])->get('/', function () {return view('home');})->name('home');

Route::get('/', function() {
    return view('home');
    });

/** Rutas de pedidos Batoilogic */

Route::get('/pedidos','orderController@index'); //mostrar todos los pedidos

Route::get('/pedidos/{id}','orderController@show'); //mostrar un pedido

Route::get('/pedidos/crear','orderController@create'); // crear un pedido nuevo

Route::get('/pedidos/{id}/editar','orderController@edit'); //editar un pedido

Route::delete('/pedidos/{id}/eliminar','orderController@destroy');//eliminar un pedido

Route::put('/pedidos/{id}/update','orderController@update'); //efectuar la actualizacion de los datos de un pedido


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


/** USUARIOS --- Batoilogic */

Route::get('/usuarios','userController@index'); //mostrar lista de usuarios

Route::get('/usuario/{id}','userController@show'); //mostrar un usuario

Route::get('/usuario/crear','userController@create'); // crear un usuario nuevo

Route::get('/usuario/{id}/editar','userController@edit'); //editar un usuario

Route::delete('/usuario/{id}/eliminar','userController@destroy');//eliminar un usuario

Route::put('/usuario/{id}/update','userController@update'); //efectuar la actualizacion de los datos de un usuario