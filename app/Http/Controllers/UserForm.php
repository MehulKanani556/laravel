<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserForm extends Controller
{
    // Simp;e text field
    // function addUser(Request $req){
    //     echo "User Name is $req->username";
    //     echo "<br>";
    //     echo "User Email is $req->email";
    //     echo "<br>";
    //     echo "User City is $req->city";
    //     // return $req;
    // }

    // Select , checkbox , radio , range
    // function addUser(Request $req){
    //     echo $req->gender;
    //     echo "<br />";
        
    //     echo $req->city;
    //     echo "<br />";
    //     echo $req->age;
    //     echo "<br />";
    //     print_r ($req->skill);
      

    //     // return $req;
    // }


    // Validation
     function addUser(Request $req){
        $req -> validate([
            'username' => 'required|min:3|max:50',
            'email' => 'required | email',
            'city' => 'required | max:20',
            'skill' => 'required',
        ],[
            'username.required' => 'Username can not be empty',
            'username.min'=>'Username min characters should be 3',
            'username.max'=>'Username max characters limit is 15',
            'email.email'=>'This email is not valid'

        ]);

        return $req;
     }
}
