<?php
// Function to calculate sum of digits  @edubrotech
// link:- https://www.youtube.com/@edubrotech?sub_confirmation=1
function sumOfDigits($number)
{
    $sum = 0;

    // Loop through each digit of the number
    while ($number > 0) {
        $digit = $number % 10; // Get the last digit
        $sum += $digit;         // Add it to the sum
        $number = (int)($number / 10); // Remove the last digit
    }

    return $sum;
}

// Example usage
$inputNumber = 12345;
$result = sumOfDigits($inputNumber);

echo "The sum of digits of $inputNumber is: $result";
