<?php

namespace App\Http\Controllers;

use App\Models\PlasticNumbers;
use Illuminate\Http\Request;

class PlasticNumbersController extends Controller
{
    

    public function index(Request $request){
        $request->validate([
            'digit' => 'required|numeric|min:0|max:1000000000'
        ]);
        $sets = new PlasticNumbers();
        $sets = $sets->countSets($request->digit);
        
        return view('plasticNumbers.index', compact('sets'));
    } 

}
