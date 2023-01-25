<?php
function fruitsPrice($fruits, $cost, $quantity) //果物、個数、単価の順になってます。
{
    $price = $cost * $quantity; // 金額を計算する関数
    echo $fruits . "は" . $price . "円です。" . "<br>";
}

// 果物名、個数、単価で配列を作成
fruitsPrice("りんご", 3, 100);
fruitsPrice("みかん", 3, 50);
fruitsPrice("もも", 10, 300);
