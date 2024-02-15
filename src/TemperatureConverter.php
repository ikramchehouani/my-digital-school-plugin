<?php

namespace App\blibli;

class TemperatureConverter{
    
    public function convert($temperature, $unite){

        if($unite === 'C'){
            $fahrenheit = ($temperature * 9 / 5) + 32
        }else if ($unite === 'F') {
            $celsius = ($temperature - 32) * 5 / 9;
            return $celsius;
        }else{
            throw new Exception("Error processing Request" , 1);
        }

    }
}