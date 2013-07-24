<?php

$data = array( 1,5,3,8,2 );

# Before sort
var_dump($data);

# Swaping
function swap($a, $b, $arr){
    
   $tmp = $arr[$b];
   $arr[$b] = $arr[$a];
   $arr[$a] = $tmp;

}

# Algorithm
for ($j=0; $j < count($data)-1 ; $j++){

    $min = $j;

    for ($i=$j+1; $i < count($data); $i++){
        if($data[$i] < $data[$min]){
            $min = $i;
        }
    }

    if($min != $j){
        #echo 'hereeeeeeeeeeeeeeeeeeeeeeeeeee';
        swap($min, $j, &$data);
    }
}


# Before sort
var_dump( $data);
