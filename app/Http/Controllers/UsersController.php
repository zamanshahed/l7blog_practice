<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function index(){
    	return ['name' => 'Sumon Shahed'];
    }

    function show(){
    	echo "UsersController: It's Show Time...!!!";
    }

    function account(Request $req){

        $req->validate([
            'email'=>'required | email',
            'password'=>'required | min:3 | max:6'
        ]);

    	return $req->input('email');        
    }
}
