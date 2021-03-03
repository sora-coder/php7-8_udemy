<?php
// function sum(int $a, int $b){
//     return $a + $b;
// }

//数字を整形して表示する
// function echo_price($callback){
//     echo number_format($callback(1000, 500), '円');
// }
//クロージャー・無名関数
// $get_sum = function($a, $b){//functionの後にfunction名を付けない
//     return $a + $b;
// };

$get_sum = fn($a, $b) => $a + $b;
echo $get_sum(10, 50);

// echo_price(function($a, $b){
//     return $a + $b;
// });
