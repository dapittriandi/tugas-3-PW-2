<?php
function faktorial($a)  {
    $result = 1;
    for ($i=1; $i <= $a; $i++) { 
        $result *= $i;
    }echo "Faktorial dari $a = $result";
}

 echo faktorial(5);