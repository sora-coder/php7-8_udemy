<?php
echo '色を選んでください(1.黒、2.白、3.赤)  >';
$color = (int)trim(fgets(STDIN));//キーボードで入力されるのはstring型なのでint型に変える

// if($color === 1){
//     echo '黒が選ばれました';
// }elseif($color === 2){
//     echo '白が選ばれました';
// }elseif($color === 3){
//     echo '赤が選ばれました';
// }

switch($color){
    case 1:
        echo '黒が選ばれました';
    break;
    case 2:
        echo '白が選ばれました';
    break;
    case 3:
        echo '赤が選ばれました';
    break;
}
