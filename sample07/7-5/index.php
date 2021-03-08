<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                //送信ボタンを押してこのページに来たかどうかを判断する(POSTで)
        <?php if(!isset($_POST['message']) || $_POST['message'] === ''): ?>
            <p style="color: red;">メッセージを入力してください</p>
        <?php endif; ?>
    <?PHP endif ?>
    <form action="index.php" method="post">
                            <!-- post にすることでurlにパラメータが表示されない -->
        <label for="message">メッセージをどうぞ</label>
                            <!-- for属性の値は input の id と同じにする -->
        <input type="text" name="message" id="message">
        <button type="submit">送信する</button>
    </form>
</body>
</html>