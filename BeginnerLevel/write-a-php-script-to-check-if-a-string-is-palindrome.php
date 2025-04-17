<?php
// Function to check if a string is a palindrome @edubrotech
// link:- https://www.youtube.com/@edubrotech?sub_confirmation=1
function isPalindrome($str)
{
    $reversed = '';
    $length = 0;

    // Calculate string length manually
    while (isset($str[$length])) {
        $length++;
    }

    // Reverse string manually
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }

    // Compare original and reversed string (case-insensitive)
    return strtolower($str) === strtolower($reversed);
}

// Example usage
$input = "edubrotech";

if (isPalindrome($input)) {
    echo "\"$input\" is a Palindrome.";
} else {
    echo "\"$input\" is Not a Palindrome.";
}
