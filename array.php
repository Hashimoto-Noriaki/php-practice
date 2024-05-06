<?php

$height[0] = 160;
$height[1] = 170;
$height[2] = 180;
echo $height[0] . "<br>";

$height[] = 190;
echo print_r($height) . "<br>";


$array = array();
$array = [];

echo print_r($array) . "<br>";

$animal =  ["ライオン", "チーター", "トラ"];
echo print_r($animal) . "<br>";

//値
$soccer_player =  [
    "メッシ" => "Messi",
    "ロナウド" => "Ronald",
    "ネイマール" =>  "Neymar",
];
echo print_r($soccer_player) . "<br>";
echo $soccer_player["ロナウド"] . "<br>";

//多次元配列
$pokemon_1 = [
    "リザードン",
    "カメックス",
    "フシギバナ"
];

$pokemon_2 = [
    "サンダー",
    "ファイアー",
    "フリーザー"
];

$favorite_pokemon = [
    $pokemon_1, $pokemon_2
];
?>
<pre> <?php echo print_r($favorite_pokemon) . "<br>"; ?></pre>
<?php
echo $pokemon_1[1] . "<br>";
