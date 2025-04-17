<?php
// Function to swap values without using a third variable @edubrotech
// link:- https://www.youtube.com/@edubrotech?sub_confirmation=1
function swapWithoutTemp(&$a, &$b)
{
    echo "Before Swap: a = $a, b = $b \n";

    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;

    echo "After Swap: a = $a, b = $b \n";
}

// Example usage
$a = 10;
$b = 20;

swapWithoutTemp($a, $b);
