<?php
/*
 * 鸡尾酒排序
 */

$array = array(3,1,5,6,35,63,23,4,7,2,65,25,235,46,536,34,523,4,36,457,456,4,6324,6345,74,26,3426,45,723,5342,6,4357,54,6956,7457,452315,234,6257,568973,4526346,7368547,53,426415246,3257436856,37452634154,632574368,42636,57436,426125,46352737,6);
$count_array = count($array);

for($i=0;$i<$count_array;$i++){
    for($j=0;$j<$count_array-$i-1;$j++){
        if($array[$j]>$array[$j+1]){
            $temp = $array[$j];
            $array[$j] = $array[$j+1];
            $array[$j+1] = $temp;
        }
    }
    for($k=$count_array-1;$k>0;$k--){
        if($array[$k]<$array[$k-1]){
            $temp = $array[$k];
            $array[$k] = $array[$k-1];
            $array[$k-1] = $temp;
        }
    }
}

var_dump($array);

?>