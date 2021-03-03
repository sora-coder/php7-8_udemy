<?php
$tax =10;//消費税
function sum($a, $b){
    global $tax;
    $ret = ($a + $b) * ($tax / 100 +1);
    return $ret;
}
$num1 = 100;
$num2 = 200;
$answer = sum($num1, $num2);
echo $answer;
