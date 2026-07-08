<?php

$films=array("Fast","Predestination","Persuit","Prestige");
$keyword="avatar";

function search($list,$item){
    for($i=0; $i<count($list); $i++)
        if($list[$i]==$item)
            return "Yes";
    return "No";
}

echo search($films,$keyword);