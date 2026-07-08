<?php

$array=[64, 34, 25, 12, 22, 11, 90];

function getMax($arr){
    $max=$arr[0];
    for($i=1; $i<count($arr); $i++)
        if($arr[$i]>$max)
            $max=$arr[$i];
    return $max;
}

echo getMax($array);