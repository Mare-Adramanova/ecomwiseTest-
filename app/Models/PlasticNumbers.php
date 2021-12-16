<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlasticNumbers extends Model
{
    use HasFactory;
    private $plasticSet;
    
    function reset(){
        $this->plasticSet = [];
        $this->addSet();
    }
    
    function getPlasticSets(){
        return $this->plasticSet;
    }

    function getPlasticSetByIndex($i){
        
        return $this->plasticSet[$i];
    }

    function addSet(){
        $this->plasticSet[] = range(0, 9);;
    }

    function countSets(int $number){

        $this->reset();

        while ($digit = $number % 10){
            $number = $number / 10;
            $this->removeDigit($digit);
        }
        return count($this->getPlasticSets());
    }

    function removeDigit($digit, $isSwapped = false) {

        $digit_swap = [6 => 9, 9 => 6];
        
        foreach($this->getPlasticSets() as $index => $set){
            if( $this->checkDigitRemoval($digit, $set)){
                $this->removeDigitFromSet($index, $digit);
                return ;
            } elseif(in_array($digit, [6, 9]) && !$isSwapped){
                $this->removeDigit($digit_swap[$digit], true);
                return ;
            }
        }
        
        $this->addSet();
        $this->removeDigitFromSet(++$index, $digit);
    }

    function checkDigitRemoval($digit, $set){
        return in_array($digit, $set);
    }

    function removeDigitFromSet($index, $digit){
        unset($this->plasticSet[$index][$digit]);
    }
}

    
    
