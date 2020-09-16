<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DramaController extends Controller
{
    public  function index()
    {
        $drama=DB::table('dramas')
            ->orderBy('IMDB','DESC')
            ->get();
        return view('dramas')->with('dramas',$drama);
    }
    public function detail(){
        $drama=DB::table('dramas') ->get();
        return view('dramsummary')->with('dramas',$drama);
    }

    public function delete($id){
        DB::table('dramas')
          ->where('id',$id)
          ->Delete();
        return back();
    }
}
