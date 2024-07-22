<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserForm;
 Route::get('/home', function () {
     return view('Home');
 });
Route::get('/', function () {
    return view('welcome');
});
Route::get('user',[UserController::class,'getUser']);
Route::get('user/{name}',[UserController::class,'getAbout']);
Route::get('name/{name}',[UserController::class,'postUser']);
Route::get('admin',[UserController::class,'adminLogin']);
Route::get('adminLog',[UserController::class,'adLog']);
Route::get('home',[UserController::class,'home']);


Route::get('a',[UserController::class,'about']);

// form
Route::view('user-form','user-form');
Route::post('addUser',[UserForm::class,'addUser']);