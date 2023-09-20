<?php

function fibonacciSeries($number){

    $fNumber = 0;
    $sNumber = 1;

    for ($i=1; $i <= $number; $i++) { 
        echo $fNumber." ";
        $nNumber = $fNumber + $sNumber;

        $fNumber = $sNumber;
        $sNumber = $nNumber;
    }

    

}


fibonacciSeries(15);


?>