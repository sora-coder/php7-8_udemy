<?php
date_default_timezone_set('Asia/Tokyo');    //タイムゾーンを変更する
$today = time();
$format = date('Y/m/d', $today);
echo $format;
