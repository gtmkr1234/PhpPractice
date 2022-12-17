<?php
$arr = [1,2,3,4,5,6,7];
foreach($arr as $i){
    echo $i."\n";
}
$res1 = array_chunk($arr, 2);
//print_r($res1);
//print_r(array_merge($res1[0], $res1[1], $res1[2]));
//print_r(array_keys($res1));
//echo "------------------------";
//print_r($res1);
$arr2 = [1,2,3,5,8];
print_r(array_diff_key($arr,$arr2));
print_r(array_merge($arr,$arr2));