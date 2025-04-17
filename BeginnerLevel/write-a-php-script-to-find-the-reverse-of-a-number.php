<?php
// Function to reverse a number @edubrotech
// link:- https://www.youtube.com/@edubrotech?sub_confirmation=1
function reverseNumber($num)
{
    $reverse = 0;

    while ($num != 0) {
        $digit = $num % 10;            // Get the last digit
        $reverse = $reverse * 10 + $digit; // Append the digit to the reverse
        $num = (int)($num / 10);        // Remove the last digit
    }

    return $reverse;
}

// Example usage
$input = 12345;
$reversed = reverseNumber($input);

echo "The reverse of $input is: $reversed";
