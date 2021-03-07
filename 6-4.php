<?php
$items = simplexml_load_file('data/items.xml');//xmlファイルを呼び出す
foreach($items as $item){
    echo $item->name, '/', number_format((float)$item->price), "\n";//xmlを呼び出すと型が違うのでfloat型にしてから処理する
}

$add_el = $items->addChild('item');//itemに子要素を足す
$add_el->addChild('name', 'GO入門');
$add_el->addChild('price', '3000');

$items->asXML('data/items.xml');//ファイルに書き込まれる