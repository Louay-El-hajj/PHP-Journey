<?php

function extractAndSortNumbers($inputString) {
    $numbers = [];
    $currentNumber = '';

    for ($i = 0; $i < strlen($inputString); $i++) {
        $char = $inputString[$i];

        if (is_numeric($char)) {
            $currentNumber .= $char;
        } elseif ($currentNumber !== '') {
            $numbers[] = (int)$currentNumber;
            $currentNumber = ''; 
        }
    }

    if ($currentNumber !== '') {
        $numbers[] = (int)$currentNumber;
    }
    sort($numbers);

    return $numbers;
}

$inputString = "hpd12aq3@8w$5";
$result = extractAndSortNumbers($inputString);

echo "Original String: $inputString\n";
echo "Sorted Numbers: " . implode(', ', $result) . "\n";

?>