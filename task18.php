<?php
    include_once "function.php";
    $x=67;
    
    if (isEven($x)) { //argument
        echo "{$x} is an even number";
    }else{
        echo "{$x} is a odd number.\n";
    }
    
    $x = 0;

    echo "{$x} factorial value is: ".factorial($x);