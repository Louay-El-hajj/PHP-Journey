<?php

function decimalToBinary($decimal) {
    if (!is_numeric($decimal)) {
        return "Error: Input is not a number.";
    }

    if ($decimal == 0) {
        return "0";
    }

    $binary = '';
    while ($decimal > 0) {
        $remainder = $decimal % 2;
        $binary = $remainder . $binary;
        $decimal = (int)($decimal / 2);
      echo $decimal;
    }

    return $binary;
}
?>