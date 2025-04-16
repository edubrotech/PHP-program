<?php
// Function to reverse a string without using predefined PHP functions  @edubrotech
function reverseString($str)
{
    $reversed = "";
    $i = 0;

    // First, manually count the length of the string
    while (isset($str[$i])) {
        $i++;
    }

    $length = $i;
    

    // Loop through string in reverse order
    for ($j = $length - 1; $j >= 0; $j--) {
        $reversed .= $str[$j];
        echo "$str[$j] \n";
    }

    return $reversed;
}

// Example usage
$input = "Edubrotech";
$reversedString = reverseString($input);

echo "Original String: $input \n";
echo "Reversed String: $reversedString";
