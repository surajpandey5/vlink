<?php
function positionOfDivisible($array): string
{
    $final = [];
    foreach ($array as $key => $value) {
        if ($value % 2) {
            array_push($final, $value);
        }
    }
    $List = implode(', ', $final);
    return "The positions of numbers which are divisible by 2 : ". $List;
}

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
$divisors = positionOfDivisible ( $array );
print_r($divisors)
?>
