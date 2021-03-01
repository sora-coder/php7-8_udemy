<?php
echo '足される数　>', '数字を入力してください';
$number1 = trim(fgets(STDIN));

echo '足す数　>';
$number2 = trim(fgets(STDIN));

echo "$number1 + $number2 =", $number1 + $number2;
