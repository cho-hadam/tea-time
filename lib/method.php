<?php

//벌금 계산 메서드
function fine($car_type, $time)
{
    $fine = 0;

    switch($car_type){
        case "경형" : $fine = calFine(1500, $time); break;
        case "소형" : $fine = calFine(2000, $time); break;
        case "중형" : $fine = calFine(2500, $time); break;
        case "대형" : $fine = calFine(3000, $time); break;
    }
    return $fine;
}

function calFine($basic, $time)
{
    $fine = $basic*(int)($time/10);
    if($fine == 0){
        $fine = $basic;
    }

    return $fine;
}

function price($car_type, $time, $special)
{
    switch($car_type){
        case "경형" : $price = 1000*($time/10); break;
        case "소형" : $price = 1500*($time/10); break;
        case "중형" : $price = 2000*($time/10); break;
        case "대형" : $price = 2500*($time/10); break;
    }

    if($special==1){
        $price *= 0.9;
    }

    return $price;
}
?>