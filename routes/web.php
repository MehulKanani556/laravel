<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserForm;
use App\Http\Middleware\AgeCheckAssign;
use App\Http\Middleware\CountryCheckGroup;
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

Route::view('url1','url1');
Route::view('url2','url2');


// group middle ware
// Route::view('middleware1','groupmiddleware1') ->middleware('check1');

Route::middleware('check1')->group(function(){
    Route::view('middleware2','groupmiddleware2');
    Route::view('middleware3','groupmiddleware2');
    Route::view('middleware4','groupmiddleware2');
    Route::view('middleware5','groupmiddleware2');
});

// Assign middleware

Route::view('assignmiddleware','assignmiddleware')->middleware([AgeCheckAssign::class,CountryCheckGroup::class]);

