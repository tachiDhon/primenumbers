<?php
function prime_numbers($n, $i, $flag) {
    $flag=1;
    $i=2;
    //Read: $n;

    if ($n<=1) {
        return false;
    }
    else {
        goto Step7; // Any number below 1 is not prime
    
        while ($i < [($n/2) + 1]) {
            
            if ($n%$i==0) {
                $flag==0;
            }
            goto step6;
        }
        
    } 
    Step7:
    echo 'Stop'; 

    step6:
    if ($flag==0) {
        return false;
    } else {
        return true;
    }
}
prime_numbers(2, 0, $flag);