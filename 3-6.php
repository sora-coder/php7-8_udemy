<?php
$color = ['黒', '白', '赤'];

// array_unshift($color, '緑', '黃');

// array_push($color, '緑','黃');

// $mycolor = array_shift($color);
// $mycolor = array_pop($color);
// echo $mycolor;

// print_r($color);

// echo count($color);

$color_string = implode(',', $color);
$color_string .= ',緑,黃';//$color_string配列に緑と黃を追加する
$newarray = explode(',', $color_string);
print($color_string);
print_r($newarray);
