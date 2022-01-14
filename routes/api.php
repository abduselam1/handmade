<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/post',[Controllers\PostController::class,'index']);

Route::get('/post/{id}',[Controllers\PostController::class,'show']);

Route::get('/post/{id}/like',[Controllers\PostController::class,'liked']);

Route::get('/post/{id}/unlike',[Controllers\PostController::class,'unlike']);

Route::get('/post/{id}/save',[Controllers\PostController::class,'save']);

Route::get('/post/{id}/unsave',[Controllers\PostController::class,'unsave']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
