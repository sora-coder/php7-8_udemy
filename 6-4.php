<?php
$items = simplexml_load_file('data/items.xml');//xmlファイルを呼び出す
foreach($items as $item){
    echo $item->name, '/', number_format((float)$item->price), "\n";//xmlを呼び出すと型が違うのでfloat型にしてから処理する
}