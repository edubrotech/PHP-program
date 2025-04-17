<?php
// Manual conversion to lowercase @edubrotech
// link:- https://www.youtube.com/@edubrotech?sub_confirmation=1
function toLowercaseManual($str)
{
    $result = "";
    $i = 0;

    while (isset($str[$i])) {
        $char = $str[$i];
        $ascii = ord($char);

        // Check if character is uppercase A-Z
        if ($ascii >= 65 && $ascii <= 90) {
            $result .= chr($ascii + 32); // Convert to lowercase
        } else {
            $result .= $char;
        }
        $i++;
    }

    return $result;
}

// Example usage
$input = "Edubrotech ROCKS!";
echo "Original: $input<br>";
echo "Lowercase: " . toLowercaseManual($input);
