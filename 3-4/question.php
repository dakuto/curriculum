<?php
session_start();
$_SESSION['user_name'] = $_POST['user_name'];

$question1 = ["80", "22", "20", "21"];
$question2 = ["PHP", "Python", "JAVA", "HTML"];
$question3 = ["join", "select", "insert", "update"];

$answer1 = $question1[0];
$answer2 = $question2[3];
$answer3 = $question3[1];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3章チェックテスト｜質問</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container question_container">
        <p>お疲れ様です<?php echo $_SESSION['user_name']; ?>さん</p>

        <form action="answer.php" method="post">
            <h2>①ネットワークのポート番号は何番？</h2>
            <?php foreach ($question1 as $value) { ?>
                <input type="radio" name="question1" value="<?php echo $value; ?>"><?php echo $value; ?>
            <?php } ?>
            <input type="hidden" name="answer1" value="<?php echo $answer1; ?>">

            <h2>②webページを作成するための言語は？</h2>
            <?php foreach ($question2 as $value) { ?>
                <input type="radio" name="question2" value="<?php echo $value; ?>"><?php echo $value; ?>
            <?php } ?>
            <input type="hidden" name="answer2" value="<?php echo $answer2; ?>">

            <h2>③MySQLで情報を取得するためのコマンドは？</h2>
            <?php foreach ($question3 as $value) { ?>
                <input type="radio" name="question3" value="<?php echo $value; ?>"><?php echo $value; ?>
            <?php } ?>
            <input type="hidden" name="answer3" value="<?php echo $answer3; ?>">
            <br>
            <div class="question_button">
                <input type="submit" value="回答する">
            </div>
        </form>
    </div>
</body>

</html>