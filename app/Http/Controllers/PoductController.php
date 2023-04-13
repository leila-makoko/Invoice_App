<?php

namespace App\Http\Controllers;

use App\Models\Poduct;
use Illuminate\Http\Request;

class PoductController extends Controller
{
    public function all_poduct(){
        $poducts=Poduct::orderBy('id','DESC')->get();
        return response()->json([
            'poducts'=>$poducts

        ],200);
    }
}
