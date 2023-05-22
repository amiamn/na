<?php
//受け取り代入
$name = $_POST["name"];
$radio = $_POST["radio"]; 

echo <<< _HTML_
<!doctype html>
<html lang="ja">
<head>
<title>PHPテスト</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
<ul>
    <li><a href="form.html">TOP</a></li>
    <li><a href="pro.html">プロフィール</a></li>
</ul>
</nav>
<p class="k">$name</p>
<p class="k">$radio</p>
<form action="s.php" method="post">
  <input type="hidden" name="name" value="$name">
  <input type="hidden" name="radio" value="$radio">
  <input type="submit" value="登録" class="k">
</form>
</body>
</html>
_HTML_;
?>