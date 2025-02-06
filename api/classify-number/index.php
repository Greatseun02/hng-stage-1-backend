<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;");
header("Access-Control-Allow-Methods: GET");

if($_SERVER['REQUEST_METHOD'] === "GET" && isset($_GET["number"])){
    $number = $_GET["number"];
    $return=[];

    if(is_numeric($number)){
        $abs_number = abs($number);
        $number *= 1;
        if(is_integer($number)){
            include_once "../../helper/prime.php";
            include_once "../../helper/getProp.php";
            include_once "../../helper/getDigitSum.php";
            include_once "../../helper/getFunFact.php";
            include_once "../../helper/getPerfect.php";

            $isPrime=checkPrime($abs_number);
            $isPerfect=getPerfect($abs_number);
            $prop=getProp($abs_number);
            $digit_sum=getDigitSum($abs_number);
            $fun_fact = getFunFact($number);

            http_response_code(200);
            $return = [
                "number"=> $number,
                "is_prime"=> $isPrime,
                "is_perfect"=>$isPerfect,
                "properties"=> $prop,
                "digit_sum"=> $digit_sum,
                "fun_fact"=> $fun_fact,
            ];
        }else{
            http_response_code(400);
            $return = [
                "number"=>"alphabet",
                "error"=> true
            ];
        }
    }else{
        http_response_code(400);
        $return = [
            "number"=>"alphabet",
            "error"=> true
        ];
    }

    echo json_encode($return);
}else{
    http_response_code(400);
    echo json_encode(["number" => "alphabet", "error" => true]);
    exit;
}
?>