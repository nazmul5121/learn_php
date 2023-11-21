<?php
    // Factorial numner calculation
    $n = 4;
    for($i=$n,$fact=1; $i>1; $i--){
        $fact *= $i;
    }
    echo "$n Factorial Number is : $fact";
    echo "\n";
    function fact($n){
        if($n==0){
            return 1;
        }
        else{
            return $n* fact($n-1);
        }
    }
    echo fact(6);