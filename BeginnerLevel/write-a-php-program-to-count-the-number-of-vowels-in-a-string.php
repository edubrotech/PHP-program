<?php
// Function to count vowels in a string @edubrotech
// link:- https://www.youtube.com/@edubrotech?sub_confirmation=1
function countVowels($str)
{
    $count = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    // Convert string to lowercase for consistency
    $str = strtolower($str);

    // Loop through each character in the string
    $i = 0;
    while (isset($str[$i])) {
        if (in_array($str[$i], $vowels)) {
            $count++;
        }
        $i++;
    }

    return $count;
}

// Example usage
$input = "Edubrotech Rocks!";
$vowelCount = countVowels($input);

echo "The number of vowels in '$input' is: $vowelCount";
