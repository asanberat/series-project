<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActionController extends Controller
{
    public function index()
    {

       $action=DB::table('actions')
           ->orderBy('IMDB','DESC')
           ->get();
        return view('actions')->with('actions',$action);


    }
    public function detail(){

        $action=DB::table('actions') ->get();
       return view('actsummary')->with('actions',$action);

    }
    public function delete($id){
        DB::table('actions')
            ->where('id',$id)
            ->Delete();
        return back();
    }
}
