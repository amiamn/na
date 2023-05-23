<?php
session_start();
if(isset($_SESSION["nameID"]) && isset($_SESSION["pass"])){
    echo <<<_S_
    <!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>5/22〆演習</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="form.html">TOP</a></li>
                <li><a href="pro.html">プロフィール</a></li>
            </ul>
        </nav>
    
        <p> ログイン中です。<p>
        <p> 現在は、{$_SESSION["nameID"]} のアカウントです。</p>
    
        <div><h1>青森県知事選択フォーム</h1></div>
        <form action="k.php" method="post">
            <table>
                <tr>
                    <td>●お名前</td>
                    <td><input type="text" name="name" value="" class="input" placeholder="布川 優樹" required=""></td>
                </tr>
                <tr>
                    <td>●選択人物</td>
                    <td><label><input type="radio" name="radio" value="A" class="input" required="">宮下総一郎</label>
                        <label><input type="radio" name="radio" value="B" class="input" required="">横垣成年</label>
                        <label><input type="radio" name="radio" value="C" class="input" required="">小野寺晃彦</label>
                        <label><input type="radio" name="radio" value="D" class="input" required="">楠田謙信</label>
                    </td>
                </tr>
            </table> 
            <input type="submit" value="送信" class="sosin">       
        </form>
        <div><img src="https://cdn.discordapp.com/attachments/520954439276953600/911400495833288704/6b38fc3f7db10eb322581e5d342513aa.gif" alt="?" class="wani"></div>
    
        <p><a href="logout.php"> ログアウトします。</a></p>
    
    </body>
    </html>
    _S_;
}else{
    header("Location: session.html");
}

?>
