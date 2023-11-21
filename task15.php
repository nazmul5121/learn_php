<?php
    // Write a PHP script to get the largest key in an array.
    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
    "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=> "Valetta","Austria" => "Vienna", "Poland"=>"Warsaw") ;

    $Large_key = max(array_keys($ceu));
    echo $Large_key;
    echo "<br>";
    // Write a PHP script to print "second" and Red from the following array.
    
    $color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
    "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
    "holes" => array ( "First", 5 => "Second", "Third"));
    print_r($color);
    echo $color["holes"][5]."\n";
    echo $color["color"]['a'];