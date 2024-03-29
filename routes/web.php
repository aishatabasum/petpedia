<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\UserController;
use App\http\controllers\userscontroller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/name', function () {
    return view('a.a');
});
Route::get("/about",function () {
    return view("about");
});
Route::get("/user/{id}",[UserController::class,'show']);
//Route::get("user","UserController@show");
//Route::get("/user",function(){
   // return view("users");
//});
Route::get("user1",[userscontroller::class,'loadview']);
Route::get("footer",function(){
    return view("footer");
});
Route::get("about1",function(){
    return view("about1");
});