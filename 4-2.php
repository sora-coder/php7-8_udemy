<?php
// $price = number_format(1000);
// echo $price;

//足し算をするファンクション
function sum($num1, $num2){
    $answer = $num1 + $num2;
    return $answer;
}
$item_sum = sum(167, 269);
echo $item_sum;
