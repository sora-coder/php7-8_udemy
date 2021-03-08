<?php
    session_start();//session_regenerate_id();を記述するとセッションが関連付けできなくなるので記述しない
    if(isset($_SESSION['account'])){//セッションを受け取らなかったときの処理を記述することでURLに直接page02.phpを指定されたときの対応をする
        $account = $_SESSION['account'];//index.phpで記憶したものを改めて$accountに入れる
    } else {
        $account = '';
    }

    //セッションの削除の仕方
    $_SESSION = [];
    //phpマニュアルのsession_destroyのif文を丸々コピーして使う
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_destroy();
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
    <p><?php echo htmlspecialchars($account, ENT_QUOTES || ENT_HTML5) . 'さん'; ?></p>
</body>
</html>