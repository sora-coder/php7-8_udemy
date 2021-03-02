<?php
//合計を計算する
function sum(...$numbers){
    $answer = 0;
    foreach($numbers as $num){
        $answer += $num;
    }
    return $answer;
}

$item_sum = sum(10, 20, 30, 40, 50, 60, 70);
echo $item_sum;
