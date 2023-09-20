<?php 

echo "Task 1.1 : Even Number Using For Loop <br><br>";
function evenNumberUsingForLoop($start, $end, $step){
    for ($i= $start; $i <= $end ; $i += $step) { 
        
        if ($i % 2 == 0) {
            echo "$i <br>";
        }
    }
}

evenNumberUsingForLoop(1,20,1);

echo "<br>Task 1.2 Print Even Numbers Using While Loop. <br><br>";


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


echo "<br>Task 1.3 Print Even Numbers Using Do While Loop. <br><br>";
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