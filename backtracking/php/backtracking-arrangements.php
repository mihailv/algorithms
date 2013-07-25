<?php

# [<<] Data

/*
 * Printer
 */
function print_solution( &$x, &$st){
   foreach ($x as $n){
       print($n);
   }
   echo "\n";
}

/*
 * Verify if valid arrangements condition is fulfilled
 */
function cond( &$x, &$st ){

    # Check all previous values are diff from curent
    for( $i=0; $i < $st ; $i++ ){
        if ($x[$i] == $x[$st]){
            return false;
        }
    }
    return true;
}

/*
 * Backtracking 
 */
function backtrack( &$n, &$k, &$x){
    
    $st = 0;

    # Search for values until last index value cannot be incremeted
    while ( $st > -1 ){
        
        if ( $x[$st] < $n ) {
            
            # Increment value at current index
            $x[$st] ++; 
            
            # Validate if value on index 
            if (cond($x, $st)){
                
                # Check if value obtained
                if( $st == $k - 1 ) {
                    print_solution( $x, $st); 
                    continue;
                }
                    
                # Move up on index
                $st ++;
                $x[$st] = -1;
            }
        # Move down on index
        }else{
            $st --;
        }

    }

}

# [<<] Program 

# Input
$n = 7; 
$k = 3;

# Logic
for($i=0; $i<$k; $i++){
    $x[$i]=-1;
}

backtrack( $n, $k, $x);
