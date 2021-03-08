<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $mysql = new mysqli('localhost', 'root', 'root', 'mydb2', 8889);
                    //データベースに接続
        if($mysql->connect_errno) {//エラー番号が入ったら(エラーがなければ0が入る)
            die($mysql->connect_error);//エラーメッセージを表示する
                //die = 処理を終了する関数
        }
    ?>
</body>
</html>