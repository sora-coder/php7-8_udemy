<?php
// $color = ['黒', '赤', '白'];
// array_shift($color);
// print_r($color);

// $price = 10000;
// $new_price = number_format($price);
// echo $price;
// echo "\n";
// echo $new_price;


//配列の先頭に文字をつなげる
function add_head(&$target){
    for($i=0; $i<count($target); $i++){
        $target[$i] = '●' . $target[$i];
    }
}
$color = ['黒', '赤', '白'];
add_head($color);
print_r($color);
