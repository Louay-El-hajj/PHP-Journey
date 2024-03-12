<?php

function validateIPv4($ipAddress) {
   
    $parts = explode('.', $ipAddress);

    if (count($parts) !== 4) {
        return false;
    }
    foreach ($parts as $part) {
        if (!is_numeric($part) || $part < 0 || $part > 255 || $part != (int)$part) {
            return false;
        }
    }
    return true;
}
?>
