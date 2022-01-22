<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function SignUp (){

        return view('pages.signup');
    }

    public function Login (){

        return view('pages.login');
    }
}
