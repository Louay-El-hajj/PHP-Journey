<?php

function flipDigits($number)
{
    $reversed = 0;
    while ($number > 0) {
        $digit = $number % 10;
        $reversed = $reversed * 10 + $digit;
        $number = (int)($number / 10);
    }

    return $reversed;
}

// //test
// $number = 12345;
// $flip = flipDigits($number);
// echo "Original Number: $number\n";
// echo "Flipped Number: $flip";
?>