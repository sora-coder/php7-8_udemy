<?php
echo '数字を入力してください';
$number = trim(fgets(STDIN));

// 10よりも大きいか判断する
if($number > 10){
    echo '10よりも大きです';
} elseif($number == 10) {
    echo '10です';
} elseif($number <= 0){
    echo '0以下です';
} else {
    echo '10以下です';
}
