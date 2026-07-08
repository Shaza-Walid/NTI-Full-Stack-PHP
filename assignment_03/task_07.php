<?php

$films=array("avatar","Prestige","avatar","Prestige");
$keyword="avatar";

function counter($list,$item){
    $count=0;
    for($i=0;$i<count($list);$i++)
        if($list[$i]==$item)
            $count++;
    return $count;
}

echo counter($films,$keyword);