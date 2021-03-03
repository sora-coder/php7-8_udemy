<?php
//functionベース
// date_default_timezone_set('Asia/Tokyo');    //タイムゾーンを変更する
// $today = time();
// $format = date('Y/m/d', $today);
// echo $format;

$today = new DateTime();         //DateTimeのオブジェクトを作る
$today->setTimezone(new DateTimeZone('Asia/Tokyo'));
echo $today->format('Y/m/d');
