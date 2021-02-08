<?php

function interchangeLetters($testString): string
{
    $arrayTemp = str_split($testString);
    foreach ($arrayTemp as $key => $value) {
        if (ctype_upper($value)) {
            $arrayTemp[$key] = strtolower($value);
        }
        if (ctype_lower($value)) {
            $arrayTemp[$key] = strtoupper($value);
        }
    }
    return(implode($arrayTemp));
}

$testString = "EduCatiON";
$interchanged = interchangeLetters ( $testString );
print_r($interchanged)

?>
