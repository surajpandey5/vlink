<?php
function NumberOfDivisors($x): string
{
    $divisors = [];
    for($i = 1; $i < $x; $i ++) {
        if ($x % $i === 0) {
            array_push($divisors, $i);
        }
    }
    $numberOfDivisors = count($divisors);
    $sumOfDivisors = array_sum($divisors);
    return "The Number of lucky divisors is ".$numberOfDivisors.".\nThe Sum of Divisors is ".$sumOfDivisors. "\n";
}

$divisors = NumberOfDivisors ( 147 );
print_r($divisors)
?>
