<?php

$x=10;

function RouteRandomPass($n) {
    // the group of characters that you will generate the word from
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    
    for ($i = 0; $i < $n; $i++) {
        $randomIndex = rand(0, strlen($characters) - 1);     //choose random index from the group of characters
        $randomString .= $characters[$randomIndex];         //adding the random character to the result
    }
    return $randomString;
}

echo RouteRandomPass($x); 