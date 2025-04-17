<?php
// Function to calculate string length manually @edubrotech
// link:- https://www.youtube.com/@edubrotech?sub_confirmation=1
function getStringLength($str)
{
    $length = 0;

    // Loop through each character until end of string
    while (isset($str[$length])) {
        $length++;
    }

    return $length;
}

// Example usage
$input = "Edubrotech";
$result = getStringLength($input);

echo "The length of the string '$input' is: $result";
