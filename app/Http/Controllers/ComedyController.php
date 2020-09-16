<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ComedyController extends Controller
{
    public function index()
    {

        $comedy=DB::table('comedies')
            ->orderBy('IMDB','DESC')
            ->get();
        return view('comedies')->with('comedies',$comedy);
    }
    public function detail(){

        $comedy=DB::table('comedies') ->get();
        return view('comsummary')->with('comedies',$comedy);

    }
    public function delete($id){
        DB::table('comedies')
            ->where('id',$id)
            ->Delete();

        return back();
    }
}
