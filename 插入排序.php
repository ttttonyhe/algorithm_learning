<?php
/*
 * 插入排序
 */

$array = array(1,3,5,1,2,35,6,123);
$count_array = count($array);

for($i=1;$i<$count_array;$i++){
    $index = $i - 1;
    $current = $array[$i];
    while($index>=0 && $array[$index] > $current){
        $array[$index+1] = $array[$index];
        $index--;
    }
    $array[$index+1] = $current;
}

var_dump($array);

?>