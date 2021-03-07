<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>現在の時刻は、<?php echo date('H:i:s') ?>です。</p>
    <?php echo '<h1>見出しです</h1>'; ?>
    <?php echo htmlspecialchars('HTMLの見出しは<h1>と書きます。',ENT_QUOTES | ENT_HTML5); ?>
    <!-- htmlspecialcharsを使うことで<h1>がタグではなく文字として表示される -->
</body>
</html>