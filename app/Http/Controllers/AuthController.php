<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use \App\Models\Models\Admin;
class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function loginPost(Request $request)
    {

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect()->route('welcome');
        }
        return redirect()->route('login')->withErrors('hatali Giris');
        }
        }



