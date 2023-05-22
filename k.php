<?php
//受け取り代入
$name = $_POST["name"];

echo <<< _HTML_
<!doctype html>
<html lang="ja">
<head>
<title>PHPテスト</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>
<body>
<p>$name</p>
<form action="s.php" method="post">
  <input type="hidden" name="name" value="$name">
  <input type="submit" value="登録">
</form>
</body>
</html>
_HTML_;
?>