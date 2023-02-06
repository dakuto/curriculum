<?php
$number = $_POST['number'];
var_dump($_POST);
$num_len = strlen($number);
echo ('<br>');
var_dump($num_len);
echo ('<br>');
$num_rand = mt_rand(0, $num_len);
var_dump($num_rand);
echo ('<br>');
$num_subs = substr($number, $num_rand, 1);
var_dump($num_subs);
echo ('<br>');

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>３章練習問題2｜結果</title>
</head>

<body>
    <p><?php echo date("Y/m/d"); ?>の運勢は</p>
    <p>選ばれた数字は<?php echo substr($number, $num_rand, 1); ?></p>
    <p>
        <?php
        if ($num_subs == 0) {
            echo "凶";
        } elseif ($num_subs <= 3) {
            echo "小吉";
        } elseif ($num_subs <= 6) {
            echo "中吉";
        } elseif ($num_subs <= 8) {
            echo "吉";
        } elseif ($num_subs == 9) {
            echo "大吉";
        }
        ?>
    </p>

</body>

</html>