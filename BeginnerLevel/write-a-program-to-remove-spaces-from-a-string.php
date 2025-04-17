<?php
// Function to remove spaces from a string @edubrotech
// link:- https://www.youtube.com/@edubrotech?sub_confirmation=1
function removeSpaces($str)
{
    $result = "";
    $i = 0;

    while (isset($str[$i])) {
        if ($str[$i] != ' ') {
            $result .= $str[$i];
        }
        $i++;
    }

    return $result;
}

// Example usage
$input = "E d u b r o t e c h   Rocks";
$output = removeSpaces($input);

echo "Original String: '$input'<br>";
echo "String without spaces: '$output'";
