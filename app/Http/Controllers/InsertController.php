<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InsertController extends Controller
{
    public function index(){

        return view('series');
    }
    public function serieInsert(Request $request){

        $validateData=$request->validate([
            'name'=>'required'
        ]);

        DB::table('actions')->insert([
           'name'=>$request->name,
        ]);

        return back()->with('status','Kayıt Başarılı');
    }


}
