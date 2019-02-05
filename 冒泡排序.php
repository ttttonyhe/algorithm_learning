<?php
/*
 * 冒泡排序
 */

$array = array(2,4,1,7,3,9,6);
$count_array = count($array);

for($i=0;$i<$count_array;$i++){ //从每一个数组元素开始一遍
    for($j=0;$j<($count_array-$i-1);$j++){ //每次循环确定一个最大的在右边
        if($array[$j] > $array[$j + 1]){ //两两相比，大的放右边
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
    }
}

var_dump($array);

?>