<?php 
    function getProp($number){
        $to_return = [];
        $number_as_string = "$number";
        $string_as_array = str_split($number_as_string);
        $sum_of_digit_raised_by_power_of_digits_in_number = 0;

        foreach($string_as_array as $x){
            $sum_of_digit_raised_by_power_of_digits_in_number += pow($x,count($string_as_array));
        }

        if($number === $sum_of_digit_raised_by_power_of_digits_in_number){
            array_push($to_return, "armstrong");
        }

        if($number % 2 === 0){
            array_push($to_return, "even");
        }else{
            array_push($to_return, "odd");
        }

        return $to_return;
    }
?>