<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MakeAPalindrom extends Model
{
    use HasFactory;

    private $string;

    public function getString(){
        return $this->string ;
    }

    public function makeit($string){

    }

    public function checkIsPalindrom($string){
        $revString = strrev($string);
        if($this->$string == $revString){
            return true;
        }else{
            return 'The string is not a palindrom';
        }

    }

    
}
