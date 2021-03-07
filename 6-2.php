<?php
$items = [
    ['PHP入門', 1500],
    ['JS入門', 2300],
    ['Python入門', 2000]
];

$file = new SplFileObject('data/item.csv', 'w');

foreach($items as $item){
    $file->fputcsv($item);//csvファイルを作成して$itemsをcsv形式で書き込む
}
