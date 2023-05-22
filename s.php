<?php
$name = $_POST["name"]; 

$dsn = 'mysql:host=localhost; dbname=php; charset=utf8';
$user = 'testuser';
$pass = 'testpass';

try{
    $dbh = new PDO($dsn, $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($dbh == null){
    }else{
          
    $SQL = "insert into phpname(name) values (:name)";
    $stmt = $dbh->prepare($SQL);
    $stmt -> bindParam(":name",$name);
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
