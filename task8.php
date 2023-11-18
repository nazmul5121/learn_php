<?php
$number = array(1, 2, 3, 4, 5);
array_splice($number, 3, 0, "'$'");
print_r($number);