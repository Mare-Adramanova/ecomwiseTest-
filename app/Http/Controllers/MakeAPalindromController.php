<?php

namespace App\Http\Controllers;

use App\Models\MakeAPalindrom;
use Illuminate\Http\Request;

class MakeAPalindromController extends Controller
{
    public function index(Request $request){
        $string = $request->string;
        
        $palindrom = new MakeAPalindrom();
        $palindrom = $palindrom->checkIsPalindrom($string);
       
        return view('palindrom.index', compact('palindrom'));
        
    }
}
