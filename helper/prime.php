<?php 
    function checkPrime($number){
        if ($number===0 || $number===1){
            return False;
        }
        for($i=2;$i<=sqrt($number);$i+=1){
            if($number % $i === 0){
                return False;
            }
        }
        return True;
    }
?>