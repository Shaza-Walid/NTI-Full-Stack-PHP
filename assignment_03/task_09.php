<?php

$tests=array(1,"tariq",1.5,true,7,'s',false);

/*With For Loop
    function isBoolean($list){
        for ($i = 0; $i < count($list); $i++) {
            if (is_bool($list[$i])) //is_bool() function ensure the value is boolean or not
                echo ($list[$i] ? "Yes" : "NO") . " ";  //print boolean by Yes or No only
            else
                echo $list[$i] . " ";   //print other values as they are
        }
    }
*/

/*With While Loop
    function isBoolean($list){
        $i=0;
        while($i<count($list)){
            if (is_bool($list[$i])) //is_bool() function ensure the value is boolean or not
                echo ($list[$i] ? "Yes" : "NO") . " ";  //print boolean by Yes or No only
            else
                echo $list[$i] . " ";   //print other values as they are
            $i++;
        }
    }
*/

isBoolean($tests);