<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログアウト用</title>
</head>
<body>
    <p>ログアウトしました！</p>
    <a href="session.html">ログインページに戻る</a>
    <?php
    session_start();
    $_SESSION = array();
    session_destroy();
    ?>
</body>
</html>