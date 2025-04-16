<?php
// Function to calculate sum of natural numbers up to $n in @eudbrotech
function sumOfNaturalNumbers($n)
{
    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }

    return $sum;
}

// Example usage
$num = 10;
echo "Sum of natural numbers up to $num is: " . sumOfNaturalNumbers($num);

// Output :- Sum of natural numbers up to 10 is: 55