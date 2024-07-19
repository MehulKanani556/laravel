<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
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
//check view exist or not
    function adLog(){
        if(View::exists('admin.Login')){
            return view('admin.Login');
        }else{
            echo "No view found";
        }
    }

    function home (){
        $name = "Mehul";
        $user = ['a','b','c'];
        return view('home',["name" =>$name,"user" => $user]);
    }
    function about(){
        return view('about');
    }
}
