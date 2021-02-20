<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Api\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('login', 'Api\LoginController@login');
Route::apiResource('orders',Api\orderController::class);
Route::apiResource('orderlines',Api\orderlineController::class);
Route::apiResource('products',Api\productController::class);
Route::apiResource('providers',Api\providerController::class);
Route::apiResource('states',Api\stateController::class);
Route::apiResource('Users',Api\userController::class);