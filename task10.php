<?php
    $temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 63, 73, 72, 65, 74, 65, 69, 65, 64, 68, 73, 75, 79, 73);
    $avarage = array_sum($temp)/count($temp);
    echo $avarage;
    echo "<br>";
    echo "lowest five temparature in array: ";
    sort($temp);
    for ($i=0; $i < 5; $i++) 
        {
            echo $temp[$i], ", ";
        }
        