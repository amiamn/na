<?php
$name = $_POST["name"]; 
$radio = $_POST["radio"]; 

echo <<< _HTML_
<!doctype html>
<html lang="ja">
<head>
<title>5/22〆演習</title>
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
</body>
_HTML_;
$dsn = 'mysql:host=localhost; dbname=php; charset=utf8';
$user = 'testuser';
$pass = 'testpass';

try{
    $dbh = new PDO($dsn, $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($dbh == null){
    }else{
          
    $SQL = "insert into php(name,radio) values (:name,:radio)";
    $stmt = $dbh->prepare($SQL);
    $stmt -> bindParam(":name",$name);
    $stmt -> bindParam(":radio",$radio);
    $stmt -> execute();

    echo "登録完了。ありがとうございました";
    }
}    catch(PDOException $e){                   //エラーが出たときに表示させる
    echo "接続失敗...<br>";
    echo "エラー内容".$e->getMessage();      
    die();                        
    }
    $dbh = null;
?>
