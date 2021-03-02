<?php
//連想配列を受け取って、リストのして出力する
function make_list($list){
    foreach($list as $key => $value){
        echo '・', $key, ' : ', $value, "\n";
    }
}

$pref = [
    'hokkaido' => '北海道',
    'aomori' => '青森県',
    'iwate' => '岩手県'
];
// foreach($pref as $pref_code => $pref_name){
//     echo '・', $pref_code, ' : ', $pref_name, "\n";
// }
make_list($pref);

$color = [
    'red' => '赤',
    'blue' => '青',
    'black' => '黒'
];
// foreach($color as $color_code => $color_name){
//     echo '・', $color_code, ' : ', $color_name, "\n";
// }
make_list($color);
