<?php

use App\Http\Controllers\PublicController;
use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
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

Route::get('/',[PublicController::class,'index']);

Route::get('/post/{id}',[PublicController::class,'index']);

Route::get('/account/{username}',[PublicController::class,'index']);

Route::get('/session',function(Request $request){
    dd($request->session()->get('t'));
});
// Route::get('/test',function(){
//     return view('test');
// });


Auth::routes();
Route::delete('register/user/{user}',[App\Http\Controllers\Auth\RegisterController::class,'destroy']);
Route::post('/verify',[App\Http\Controllers\Auth\RegisterController::class,'verifyUser']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('get-emails',function(){
    $user = User::get('email');
    return $user;
});
Route::get('get-usernames',function(){
    $user = User::get('username');
    return $user;
});