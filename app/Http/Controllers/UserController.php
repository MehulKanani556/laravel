<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //simple call controller
    function getUser(){
        return "User";
    }

    //pass value in controller
    function getAbout($name){
        return "About :  ". $name;
    }

    //call view file
    function postUser($name){
        return view('user',['name' => $name]);
    }


    //call inside folder view file
    function adminLogin(){
        return view('admin.login');
    }
}
