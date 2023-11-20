<?php
    // string to array && array to string convert

    $car = explode(', ','volovo, BMW, OD, Ferrari, Marsedeze, Toyota');
        var_dump($car);
        echo "<br>";
        print_r($car);
        echo $car[2];
        echo "<br>";
        $car = join(', ',$car);
        echo $car;

        echo "<br>";

        
        $sample = [
            [1,2,3,4,5,6],
            [11,22,33,44,55],
            [111,222,333,444],
            [1111,2222,3333,4444]
        ];
        print_r($sample);
        echo $sample [3][3];

        echo "<br>";
        // for loop...........
        for($i=200; $i<250; $i+=4){
            echo " $i<br>";
        }
        echo "<br>";
        // while loop..........
        $x = 200;
        while ($x <= 250) {
            echo "$x<br>";
            $x+=4;
        }
        echo "<br>";
        // do while loop..........
        $x = 200;
        do {
            echo "$x, ";
            echo PHP_EOL;
            $x+=4;
        } while ($x <= 250);

        echo "<br>";
        //Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.
        //Note : Do not use any PHP control statement.
        // implode function...........
        echo implode(", ",range(200,250,4));
