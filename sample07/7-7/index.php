<?php
    // setcookie('account', '', time() - 1);
        // クッキーのaccountを消す time() - 1 の部分は今より前の時間にする

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        //アカウントを受信する
        $account = filter_input(INPUT_POST,'account');
        setcookie('account', $account, time() + 3600);
        echo $account;
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="account">アカウント名</label>
        <?php //$save_account = $_COOKIE['account']; ?>
        <?php $save_account = filter_input(INPUT_COOKIE, 'account'); ?>
            <!-- filter_inputを使うことでクッキーが無い時にエラーが出なくなる -->
        <input type="text" name="account" id="account" value="<?php echo htmlspecialchars($save_account); ?>">
            <!-- cookieがあったら入力テキストの中にaccountを入力した状態で表示させる -->
        <button type="submit">ログインする</button>
    </form>
</body>
</html>