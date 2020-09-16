<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DenemeController extends Controller
{
    public function index(Request $request){

        $request=DB::table('users')->
            $email=$request->email;
            $password=$request->password;
            if ($request==$email && $request==$password)
            {
                echo "giriş doğru";
            }
            else{
                echo "giriş yanlış";
            }

    }
}
