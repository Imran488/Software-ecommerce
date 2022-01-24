<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function SignUp (){

        return view('pages.signup');
    }

    public function UserSignup(Request $request){
        // dd($request->all());
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password) ,
            'mobile'=>$request->mobile ,
        ]);


        return redirect()->route('login')->with('message','Registration Succesfull');
    }



    public function Login (){

        return view('pages.login');
    }


    public function UserLogin(Request $request)
    {

        $userInfo=$request->except('_token');
//        $credentials['email']=$request->user_email;
//        $credentials['password']=$request->user_password;
//        dd($credentials);
//        $credentials=$request->only('user_email','user_password');

        if(Auth::attempt($userInfo)){
            return redirect()->back()->with('message','Login successful.');
        }
        return redirect()->back()->with('error','Invalid user credentials');

    }

    // public function UserLogin(Request $request){
    //     // dd($request->all());
    //     $userpost = $request->except('_token');
    //     // dd($userpost);
    //     //  dd(Auth::attempt($userpost));
    //     if (Auth::attempt($userpost)) {
    //         return redirect()->route('home')->with('message','Login Succesfull');
    //     }
    //     else
    //         return redirect()->back()->with('error','Invalid email or password');

    // }

    public function userlogout(){
        Auth::logout();
        return redirect()->route('login')->with('message','Logged Out Thank You ');
    }
}
