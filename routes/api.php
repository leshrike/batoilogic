<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});


Route::apiResource('address',Api\addressController::class); // quizas lo eliminamos
Route::apiResource('order',Api\orderController::class);
Route::apiResource('orderline',Api\orderlineController::class);
Route::apiResource('product',Api\productController::class);
Route::apiResource('provider',Api\providerController::class);
Route::apiResource('state',Api\stateController::class);
Route::apiResource('User',Api\userController::class);