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
$sorted = false;
while ( !$sorted ){
    
    $sorted = true;
    for ( $i=0; $i < count($data)-1; $i++ ){
        if( $data[$i] > $data[$i+1] ){
            swap($i,$i+1,&$data);
            $sorted = false;
        }
    }
}

# Before sort
var_dump( $data);
