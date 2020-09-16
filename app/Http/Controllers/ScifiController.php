<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ScifiController extends Controller
{
    public function index()
    {
        $scifi=DB::table('scifi')
            ->orderBy('IMDB','DESC')
            ->get();
        return view('scifi')->with('scifi',$scifi);
    }
    public function detail(){
      $scifi=DB::table('scifi')->get();
       return view('scisummary')->with('scifi',$scifi);


    }
    public function delete($id){
        DB::table('scifi')
            ->where('id',$id)
            ->delete();
        return back();
    }
}
