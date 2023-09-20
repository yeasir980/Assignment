<?php 

function evenNumberUsingForLoop($start, $end, $step){
    for ($i= $start; $i <= $end ; $i += $step) { 
        
        if ($i % 2 == 0) {
            echo "$i <br>";
        }
    }
}

evenNumberUsingForLoop(1,20,1);

function evenNumberUsingWhileLoop($start, $end, $step){
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo "$i <br>";
        }
        $i+= $step;
    }
}

evenNumberUsingWhileLoop(1,20,1);

function evenNumberUsingDoWhileLoop($start, $end, $step){
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo "$i <br>";
        }
        $i+= $step;
    } while ($i <= $end);
}

evenNumberUsingDoWhileLoop(1,20,1);
?>
