<?php
$fruits = ["りんご" => 50, "みかん" => 50, "もも" => 300];
$fruitAmount = [6, 3, 10];
$i = 0;

function getPrice($unitPrice, $quantity)
{
    $price = $unitPrice * $quantity;
    return $price;
}

foreach ($fruits as $key => $value) {
    echo $key . "は" . getPrice($value, $fruitAmount[$i]) . "円です。" . "<br>";
    $i++;
    // var_dump($fruitAmount);
}
