<?php 

$x=8;   $y=3;
function calculations($a,$b){
    echo "the product of $a and $b is: ".($a*$b)."<br>";
    echo "the subtraction of $a and $b is: ".($a-$b)."<br>";
    echo "the division of $a and $b is: ".((double)$a/(double)$b)."<br>";
}

calculations($x,$y);