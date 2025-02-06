<?php
    function getFunFact($number){
       $url="http://numbersapi.com/{$number}/math";

       return file_get_contents($url);
    }
?>