<?php
    $lesson_array = array("abcd","abc","de","hjjj","g","wer");
    $new_array = array_map('strlen',$lesson_array);
    print_r($new_array);
    echo "The shortest array length is ".min($new_array).
    "The longest array length is ".max($new_array);
    // ternary operator
    echo "\n";
    $n = 97;
    $data = ($n%2 == 0) ? "even" : "odd";
    echo $data;