<?php
function prime_numbers($n) {
    $flag=1;
    $i=2;

    if ($n<=1) {
        return false;
    } else {
        //goto Step7; Any number below 1 is not prime
        while ($i < ($n/2) + 1) {
            if ($n%$i==0) {
                return false;
                // $flag=0;
                // continue;
            }
            // goto step6;
            $i++;
        }
    }
    // step6:
    return true;
}
var_dump(prime_numbers(31));
var_dump(prime_numbers(6));
var_dump(prime_numbers(7));
var_dump(prime_numbers(13));
var_dump(prime_numbers(14));
var_dump(prime_numbers(100));