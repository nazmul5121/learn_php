<?php
    function isEven($n){ //parameter
            if ($n % 2==0) {
                return true;
            }
            return false;
        }


        function factorial( int $n){
            $result = 1;
            for ($i=$n; $i>1 ; $i--) { 
                $result *= $i;
            }
            return $result;
        }