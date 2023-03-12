<?php
// セッション開始
session_start();
// セッション変数のクリア
$_SESSION = array();
// セッションクリア
session_destroy();
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ログアウト</title>
</head>

<body>
    <div class="container">
        <h2>ログアウト画面</h2>
        <h4>ログアウトしました</h4>
        <input class="button" type="button" onclick="location.href='login.php'" value="ログイン画面">
    </div>
</body>

</html>