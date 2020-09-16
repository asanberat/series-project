<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('mlogin');
    }
    public function authenticate(Request $request)
    {

   //     $email = $request->email;
 //       $password = $request->password;
        //     if (Auth::attempt([
        //         'email' => $request->email,
        //        'password' =>$request->password,

        //    ])) {
        //        return redirect()->intended('homepage');
        //    } else {
        //         return " gecersiz";
        //     }
        return "geldi";
    }

    public function mlogout(){
        Auth::logout();
        return redirect('mlogin');
    }
}
