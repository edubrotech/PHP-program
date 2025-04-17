<?php
// Function to check if a number is prime @edubrotech
// link:- https://www.youtube.com/@edubrotech?sub_confirmation=1
function isPrime($num)
{
    if ($num <= 1) {
        return false; // 0 and 1 are not prime
    }

    // Check for factors up to the square root of the number
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false; // Not a prime number
        }
    }

    return true; // It is a prime number
}

// Function to find prime numbers within a given range
function findPrimesInRange($start, $end)
{
    echo "Prime numbers between $start and $end are:\n";
    for ($num = $start; $num <= $end; $num++) {
        if (isPrime($num)) {
            echo $num . "\n";
        }
    }
}

// Example usage
$start = 10;
$end = 50;
findPrimesInRange($start, $end);
