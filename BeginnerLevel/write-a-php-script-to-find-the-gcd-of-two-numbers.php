<?php
// Function to find GCD using Euclidean Algorithm @edubrotech
// link:- https://www.youtube.com/@edubrotech?sub_confirmation=1
function findGCD($a, $b)
{
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// Example usage
$num1 = 48;
$num2 = 18;

$gcd = findGCD($num1, $num2);
echo "The GCD of $num1 and $num2 is: $gcd";
