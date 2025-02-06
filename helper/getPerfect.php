<?php
    function getPerfect($number){
    if ($number < 2) return false;
    
    $sum = 1;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $sum += $i;
            if ($i != $number / $i) { 
                $sum += $number / $i;
            }
        }
    }
    
    if ($sum == $number) return True; else return False; 
    }
?>