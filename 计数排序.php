<?php

$array = array(1,23,152,353,46,32,3,24,1,4,12,32,14,32,4,325,346,23,1,12,12,42,3,2,13,12,312,42,5,346,457,45,23,12,4,23,32,4,35,25);

function countingSort($arr)
{

    for ($m = 0; $m < max($arr) + 1; $m++) {
        $bucket[] = null;
    }

    $arrLen = count($arr);
    for ($i = 0; $i < $arrLen; $i++) {
        if (empty($bucket[$arr[$i]])) {
            $bucket[$arr[$i]] = 0;
        }
        $bucket[$arr[$i]]++;
    }

    $sortedIndex = 0;
    foreach ($bucket as $key => $value) {
        if ($value !== null) $arr[$sortedIndex++] = $key;
    }

    return $arr;
}

var_dump(countingSort($array));

?>