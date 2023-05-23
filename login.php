<?php
session_start();

$nameID = htmlentities($_POST["nameID"],ENT_QUOTES,"utf-8");
$pass = htmlentities($_POST["pass"],ENT_QUOTES,"utf-8");

$pass = hash("sha256",$pass);
//echo $pass;  暗号化とif文の前に記述して暗号化したpassを取得する
if($nameID == "testname" && $pass == "924592b9b103f14f833faafb67f480691f01988aa457c0061769f58cd47311bc"){
    
    $_SESSION["nameID"] = $nameID;
    $_SESSION["pass"] = $pass;

    echo "<p>ログイン成功</p>";
    
    echo <<<_FORM_
    <form action="form.php" method="post">
    <input type="hidden" name="nameID" value="$nameID">
    <input type="hidden" name="pass" value="$pass">
    <input type="submit" value="投票へ進む☞" class="k">
    </form>
    _FORM_;
    
}else{
    echo "アカウントが存在しません。新規登録を行ってください。";
    echo <<<_FORM_
    <form>
        <input type="button" value="前の画面に戻る" onclick="history.back()">
    </form>
    _FORM_;
}


?>