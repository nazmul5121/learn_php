<?php
    // Write a PHP program to merge (by index) the following two arrays.
    $array1 = array(array(77, 87), array(23, 45));
    $array2 = array("w3resource", "com");
    print_r(array_merge($array1,$array2));
    echo "<br>";
    // find out random number
    $n = range(11,30);
    shuffle($n);
    for ($i=0; $i <20 ; $i++) { 
        echo $n[$i].', ';
    }