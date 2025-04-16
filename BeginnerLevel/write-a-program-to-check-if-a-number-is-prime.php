<?php
// Function to check if a number is prime @edubrotech
function isPrime($num)
{
    if ($num <= 1) {
        return false; // 0 and 1 are not prime
    }

    // Check from 2 to sqrt(num)
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            return false; // Not prime if divisible
        }
    }

    return true; // Prime if no divisors found
}

// Example usage
$number = 14;

if (isPrime($number)) {
    echo "$number is a Prime Number.";
} else {
    echo "$number is Not a Prime Number.";
}
