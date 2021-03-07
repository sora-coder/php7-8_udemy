<?php
// $items = [
//     [
//     'name' => 'PHP入門',
//     'price' => 1500
//     ],
//     [
//         'name' => 'JS入門',
//         'price' => 2000
//     ],
//     [
//         'name' => 'Python入門',
//         'price' => 1800
//     ]
//     ];

// $json = json_encode($items,JSON_UNESCAPED_UNICODE);//JSON形式にする(JSON_UNESCAPED_UNICODEで日本語で表示させる)
// echo $json;

// file_put_contents('data/items.json', $json);//JSON形式にしてdata/items.jsonというファイルを作成する

//JSONの読み込み
$json = file_get_contents('data/items.json');//jsonファイルをの中身を取得する
$items = json_decode($json);//json形式のデータを連想配列に戻す
print_r($items);