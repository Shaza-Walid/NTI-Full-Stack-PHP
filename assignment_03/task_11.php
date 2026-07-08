<?php

$arr1 = array('a', 'b', 'c', 'd');
$arr2 = array('c', 'd', 'e', 'f');

function theSame($arr1, $arr2){
    $same = array();
    for($i = 0; $i < count($arr1); $i++) {
        for($j = 0; $j < count($arr2); $j++) {
            if($arr1[$i] == $arr2[$j]) {
                $same[] = $arr1[$i];
            }
        }
    }
    
    foreach ($same as $x) {
        echo "$x" . " ";
    }
}

theSame($arr1, $arr2); 