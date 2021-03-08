<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS); ?>
                            <!-- フィルターを通すことで危険性を除去する -->
                            <!-- 値が存在しなければそのまま処理して、存在すればフィルターをかける -->
    <?php echo $message = $_POST['message']; ?>
    <form action="index.php" method="post">
                            <!-- post にすることでurlにパラメータが表示されない -->
        <label for="message">メッセージをどうぞ</label>
                            <!-- for属性の値は input の id と同じにする -->
        <input type="text" name="message" id="message">
        <button type="submit">送信する</button>
    </form>
</body>
</html>