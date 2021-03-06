<?php
$file = new SplFileObject('data/items.csv', 'r');
// while(!$file->eof()){//eof = end of file(最終行)つまり最終行になるまで繰り返す
//     $item = $file->fgetcsv();//cscのデータ1行分を取り出す(while構文で全文を取り出す)
//     echo $item[0], "\n";
// }

$file->setFlags(SplFileObject::READ_CSV);//setflagsで設定をする(呼び込みのモードを変更する)
foreach($file as $item){
    echo $item[1], "\n";
}
