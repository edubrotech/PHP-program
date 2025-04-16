<?php
// Function to print Fibonacci sequence up to N terms
function printFibonacci($n)
{
    $first = 0;
    $second = 1;

    echo "Fibonacci Series up to $n terms:\n";

    // Print first two terms
    if ($n >= 1) echo "$first";
    if ($n >= 2) echo ", $second";

    for ($i = 3; $i <= $n; $i++) {
        $next = $first + $second;
        echo ", $next";

        $first = $second;
        $second = $next;
    }
}

// Calling the function
printFibonacci(10);
//Fibonacci Series up to 10 terms:
//0, 1, 1, 2, 3, 5, 8, 13, 21, 34
