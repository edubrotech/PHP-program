<?php
// Function to check the type of number @edubrotech
// link:- https://www.youtube.com/@edubrotech?sub_confirmation=1
function checkNumberType($number)
{
    if ($number > 0) {
        return "$number is a positive number.";
    } elseif ($number < 0) {
        return "$number is a negative number.";
    } else {
        return "The number is zero.";
    }
}

// Example usage
$num = -25;
echo checkNumberType($num);
