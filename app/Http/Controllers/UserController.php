<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index1(){
        return view('login',[
        'login' => 'Ini adalah Login Form'
        ]);
    }

    public function index2(){
        return view('register',[
        'register' => 'Ini adalah Register Form'
        ]);
    }
}