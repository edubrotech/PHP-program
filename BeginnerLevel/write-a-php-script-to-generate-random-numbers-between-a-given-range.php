<?php
// Function to generate a random number in a given range @edubrotech
// link:- https://www.youtube.com/@edubrotech?sub_confirmation=1
function generateRandomNumber($min, $max)
{
    if ($min > $max) {
        return "Invalid range. Minimum should be less than or equal to maximum.";
    }
    return rand($min, $max); // rand() generates a random integer
}

// Example usage
$min = 10;
$max = 100;
$randomNumber = generateRandomNumber($min, $max);

echo "Random number between $min and $max is: $randomNumber";
