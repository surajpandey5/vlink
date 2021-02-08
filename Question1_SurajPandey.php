<?php
function findReplaceDuplicates($testString): string
{
    $array = [];
    foreach (count_chars($testString, 1) as $i => $val) {
        $count = chr($i);
        $array[] = $val . "," . $count;
    }
    foreach ($array as $p) {
        if (preg_split("/,/", $p) [0] == 2) {
            $double = preg_split("/,/", $p) [1];
            $stringTemp = str_replace($double, 'z', $testString);
            $testString = $stringTemp;
        }
        if (preg_split("/,/", $p) [0] > 2) {
            $triple = preg_split("/,/", $p) [1];
            $stringTemp = str_replace($triple, 'x', $testString);
            $testString = $stringTemp;
        }
    }
    return $testString;
}

$string = "BOOKKEEPER";
$interchanged = findReplaceDuplicates( $string );
print_r($interchanged);

?>
