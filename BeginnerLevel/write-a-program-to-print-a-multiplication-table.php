<?php
// Function to print multiplication table @edubrotech
// link:- https://www.youtube.com/@edubrotech?sub_confirmation=1

function printTable($number, $limit = 10)
{
    echo "Multiplication Table of $number:\n";
    for ($i = 1; $i <= $limit; $i++) {
        echo "$number x $i = " . ($number * $i) . "\n";
    }
}

// Example usage
$inputNumber = 7;
printTable($inputNumber);
