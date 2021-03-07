<?php
try{
    $file = new SplFileObject('notfound/log.txt', 'w');//notfound/log.txtテキストを作成(ファイルを先に作らないとエラーになる　)
}catch(Exception $excetption) {//例外をキャッチしたときの処理を記述する(ファイルを作成できなかったときの処理)
    // echo 'ファイルを作成できませんでした';
    // exit();

    die('ファイルを作成できませんでした');//echoとexit()を合わせた処理ができる
}
$file->fwrite('ログです');//書き込む(ファイルを作成できた時に)
