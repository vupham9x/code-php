<?php

function bubbleSort($array)
 {
    $array_size = count($array);

    for($i = 0; $i < $array_size; $i ++) {
        
        for($j = 0; $j < $array_size; $j ++) {
            if ($array[$i] < $array[$j]) {

                $tem = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $tem;
            }
        }
    }
    return $array;
}

$array = [5,2,1,3,4];

print_r( bubbleSort($array));



?>