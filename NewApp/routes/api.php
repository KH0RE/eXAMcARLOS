<?php

use Illuminate\Http\Request;
use App\Http\Controllers\User2Controller;
use App\Http\Controllers\RolController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/user2',[User2Controller::class,'index']);

Route::post('/user2',[User2Controller::class,'store']);

Route::get('/user2/{id}',[User2Controller::class,'show']);

Route::put('/user2/{id}',[User2Controller::class,'update']);

Route::delete('/user2/{id}',[User2Controller::class,'destroy']);



Route::get('/rol',[RolController::class,'index']);

Route::post('/rol',[RolController::class,'store']);

Route::get('/rol/{id}',[RolController::class,'show']);

Route::put('/rol/{id}',[RolController::class,'update']);

Route::delete('/rol/{id}',[RolController::class,'destroy']);
