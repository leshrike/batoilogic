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

Route::middleware(['auth:sanctum','verified'])->get('/pedidos','orderController@index'); //mostrar todos los pedidos

Route::middleware(['auth:sanctum','verified'])->get('/pedidos/{id}','orderController@show'); //mostrar un pedido

Route::middleware(['auth:sanctum','verified'])->get('/pedidos/crear','orderController@create'); // crear un pedido nuevo

Route::middleware(['auth:sanctum','verified'])->get('/pedidos/{id}/editar','orderController@edit'); //editar un pedido

Route::middleware(['auth:sanctum','verified'])->delete('/pedidos/{id}/eliminar','orderController@destroy');//eliminar un pedido

Route::middleware(['auth:sanctum','verified'])->put('/pedidos/{id}/update','orderController@update'); //efectuar la actualizacion de los datos de un pedido

Route::get('/pedidos/albaran','orderController@albaran')->name('albaran'); //se descarga el pdf albaran que corresponde a las entregas del dia del repartidor


/** Rutas de proveedores Batoilogic */

Route::middleware(['auth:sanctum','verified'])->get('/proveedores','providerController@index'); //mostrar la lista de proveedores

Route::middleware(['auth:sanctum','verified'])->get('/proveedores/{id}','providerController@show'); //mostrar un proveedor

Route::middleware(['auth:sanctum','verified'])->get('/proveedores/crear','providerController@create'); // crear un proveedor nuevo

Route::middleware(['auth:sanctum','verified'])->get('/proveedores/{id}/editar','providerController@edit'); //editar un proveedor

Route::middleware(['auth:sanctum','verified'])->delete('/proveedores/{id}/eliminar','providerController@destroy');//eliminar un proveedor

Route::middleware(['auth:sanctum','verified'])->put('/proveedores/{id}/update','providerController@update'); //efectuar la actualizacion de los datos de un proveedor

Route::middleware(['auth:sanctum','verified'])->get('/proveedores/{id}/stocking','providerController@stocking'); //efectuar la actualizacion de los stocks de un proveedor

Route::middleware(['auth:sanctum','verified'])->get('/proveedores/{id}/stockageUpdate','providerController@stockUpdate'); //efectuar la actualizacion de los stocks de un proveedor

/** PRODUCTOS --- Batoilogic */

Route::get('/productos','productController@index'); //mostrar lista de productos

Route::get('/productos/{id}','productController@show'); //mostrar un producto

Route::get('/productos/crear','productController@create'); // crear un producto nuevo

Route::get('/productos/{id}/editar','productController@edit'); //editar un producto

Route::delete('/productos/{id}/eliminar','productController@destroy');//eliminar un producto

Route::put('/productos/{id}/update','productController@update'); //efectuar la actualizacion de los datos de un producto


/** USUARIOS --- Batoilogic */

Route::middleware(['auth:sanctum','verified'])->get('/usuarios','userController@index'); //mostrar lista de usuarios

Route::middleware(['auth:sanctum','verified'])->get('/usuario/{id}','userController@show'); //mostrar un usuario

Route::middleware(['auth:sanctum','verified'])->get('/usuario/crear','userController@create'); // crear un usuario nuevo

Route::middleware(['auth:sanctum','verified'])->get('/usuario/{id}/editar','userController@edit'); //editar un usuario

Route::middleware(['auth:sanctum','verified'])->delete('/usuario/{id}/eliminar','userController@destroy');//eliminar un usuario

Route::middleware(['auth:sanctum','verified'])->put('/usuario/{id}/update','userController@update'); //efectuar la actualizacion de los datos de un usuario