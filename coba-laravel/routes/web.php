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

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/halo', function(){
    return view('halo', ["name" => "Programmer Pemula"]);
});
Route::get('/users', [UserController::class, 'index'])->name('list-user');
Route::get('/users/profile', function(){

});
