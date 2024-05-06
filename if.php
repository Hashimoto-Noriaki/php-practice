<?php
$age = 29;

if ($age > 20) {
    echo "エミリーは" . $age . "歳なので大人です。<br>";
}

$height = 170; //文字
var_dump($height);

if ($height === 170) { //基本===
    echo "私の身長は" . $height . "cmです。<br>";
}

$age = 29;
if ($age > 30) {
    echo "君は" . $age . "歳なのでベテランです<br>";
} else {
    echo "君は" . $age . "歳なので若手です<br>";
}


$height = 10;

if ($height === 180) {
    echo "身長は170センチではない。<br>";
}

$looks = "美人";
$style = "スタイルがいい";
$personality = "性格がいい";

if ($looks === "美人" && $style === "おしゃれ") {
    echo "付き合いたい<br>";
}

$age = 28;
if ($age >= 25) {
    echo "25歳以上なら付き合いたい<br>";
} else {
    echo "恋愛対象外<br>";
}

$looks = "タイプじゃない";
$style = "おしゃれ";
$personality = "性格が悪い";

if ($looks !== "タイプじゃない") {
    echo "美人な人がいい<br>";
} else if ($style === "スタイル悪い") {
    echo "スタイルがいい人と付き合いたい<br>";
} else if ($personality !== "性格が悪い") {
    echo "性格がいい人と付き合いたい<br>";
} else {
    echo "恋愛対象外<br>";
}

//switch文

$playing_team = "バルセロナ";
switch ($playing_team) {
    case "リバプール":
        //実行内容
        echo "プレミアの選手<br>";
        break;
    case "バイエルン":
        //実行内容
        echo "ブンデスの選手<br>";
        break;
    case "ユベントス":
        //実行内容
        echo "セリエAの選手<br>";
        break;
    case "バルセロナ":
        echo "リーガの選手<br>";
        break;
    default;   //else
        //実行 
        echo "4大リーグ外の選手<br>";
}

$check = "";
if (empty($check)) {
    echo "変数は空<br>";
}
