<?php

$arr=[0,1,2,3,4,5,6,7,8,9,10];

function summation($A){
    $sum=0;
    for($i=0;$i<count($A);$i++)
        $sum+=$A[$i];
    return $sum;
}

echo summation($arr);