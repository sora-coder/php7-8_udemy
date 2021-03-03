<?php
declare(strict_types=1);      //厳密な型の検査をONにする宣言(型の自動変換を止める)
$tax =10;//消費税
function sum(int $a, int $b): int{
    global $tax;
    $ret = ($a + $b) * ($tax / 100 +1);
    return $ret;
}
$num1 = 100;
$num2 = 200;
$answer = sum($num1, $num2);
echo $answer;
