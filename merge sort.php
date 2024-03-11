<?php
function mergeSort($array) {
    $length = count($array);

    if ($length <= 1) {
        return;
    }

    $mid = (int)($length / 2);
    $left = [];
    $right = [];

    for ($i = 0; $i < $mid; $i++) {
        $left[] = $array[$i];
    }
    for ($i = $mid; $i < $length; $i++) {
        $right[] = $array[$i];
    }
    mergeSort($left);
    mergeSort($right);

    $leftIndex = $rightIndex = $arrayIndex = 0;

    while ($leftIndex < count($left) && $rightIndex < count($right)) {
        if ($left[$leftIndex] < $right[$rightIndex]) {
            $array[$arrayIndex++] = $left[$leftIndex++];
        } else {
            $array[$arrayIndex++] = $right[$rightIndex++];
        }
    }

    while ($leftIndex < count($left)) {
        $array[$arrayIndex++] = $left[$leftIndex++];
    }

    while ($rightIndex < count($right)) {
        $array[$arrayIndex++] = $right[$rightIndex++];
    }
}
?>