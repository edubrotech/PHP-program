<?php
// Function to find the largest number @edubrotech
// link:- https://www.youtube.com/@edubrotech?sub_confirmation=1
function findLargest($a, $b, $c)
{
    if ($a >= $b && $a >= $c) {
        return $a;
    } elseif ($b >= $a && $b >= $c) {
        return $b;
    } else {
        return $c;
    }
}

// Example usage
$num1 = 25;
$num2 = 78;
$num3 = 52;

$largest = findLargest($num1, $num2, $num3);

echo "The largest among $num1, $num2, and $num3 is: $largest";
