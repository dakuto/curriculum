<?php
session_start();
$user_name = $_SESSION['user_name'];

$question1 = $_POST['question1'];
$answer1 = $_POST['answer1'];

$question2 = $_POST['question2'];
$answer2 = $_POST['answer2'];

$question3 = $_POST['question3'];
$answer3 = $_POST['answer3'];

// var_dump($question1, $question2, $question3);
// var_dump($answer1, $answer2, $answer3);

if ($question1 == $answer1) {
    $result1 = "正解！";
} else {
    $result1 = "残念・・・";
}

if ($question2 == $answer2) {
    $result2 = "正解！";
} else {
    $result2 = "残念・・・";
}

if ($question3 == $answer3) {
    $result3 = "正解！";
} else {
    $result3 = "残念・・・";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3章チェックテスト｜回答</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h2><?php echo $user_name; ?>さんの結果は・・？</h2>
    <h2>①の答え</h2>
    <p>
        <?php echo $result1; ?>
    </p>

    <h2>②の答え</h2>
    <p>
        <?php echo $result2; ?>
    </p>

    <h2>③の答え</h2>
    <p>
        <?php echo $result3; ?>
    </p>

</body>

</html>