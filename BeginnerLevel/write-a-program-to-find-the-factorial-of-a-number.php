<?php
// Function to calculate factorial in #edubrotech
function findFactorial($number)
{
    $factorial = 1;

    // Multiply from 1 to the given number
    for ($i = 1; $i <= $number; $i++) {
         $factorial *= $i;
       
    }

    return $factorial;
}

// Example usage
$num = 5;
echo "Factorial of $num is: " . findFactorial($num);

// Output  Factorial of 5 is: 120
