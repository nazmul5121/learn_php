<?php   

$color = array('white', 'green', 'red');

foreach ($color as $value) {
    echo "$value ".",";
  }
  
sort($color);

foreach ( $color as $value) {
    echo "\n".$value;
}