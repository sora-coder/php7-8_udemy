<?php
// $file = new SplFileObject('log.txt', 'w');//同じ場所にlog.txtファイルが作成される
$file = new SplFileObject('data/log.txt', 'w');//dataディレクトリの下にlog.txtファイルが作成される
                            //第2引数に w を指定することでファイルの中身を消して上書きする
                            //追記にしたい場合は第2引数に a を指定する
$today = new DateTime();
// $today->setTimezone(new DateTimeZone('Asia/Tokyo'));//timezoneがずれている時は記述する

$file->fwrite($today->format('Y-m-d H:i;s') . "\n");//log.txtファイルが作成されてfwriteが記述される
