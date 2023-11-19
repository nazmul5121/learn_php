<?php
$x = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
/*
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key
*/
 asort($x);
 var_dump($x);
 echo "<br>";
 ksort($x);
 var_dump($x);
 echo "<br>";
 arsort($x);
 var_dump($x);
 echo "<br>";
 krsort($x);
 var_dump($x);
 echo "<br>";
 print_r($x);
 echo "<br>";
 array_push($x, "nazmul");
 print_r($x);
 echo "<br>";
 array_shift($x);
 print_r($x);