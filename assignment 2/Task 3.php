<?php

$fNumber = 0;
$sNumber = 1;
$count = 0;
while ($count < 10) {
    $nNumber = $fNumber + $sNumber;
    echo $fNumber . ' ';

    if ($nNumber > 100) {
        break;
    }

    $fNumber = $sNumber;
    $sNumber = $nNumber;

    $count++;
}


?>