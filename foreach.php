<?php 

$pokemon = [
    ["name" => "ピカチュウ","level" => "70","type" => "電気"],
    ["name" => "リザードン","level" => "90","type" => "炎"],
    ["name" => "ミュウツー","level" => "100","type" => "エスパー"],
];

$Pikachu = ["name" => "ピカチュウ","level" => "70","type" => "電気"];
$Charizard = ["name" => "リザードン","level" => "90","type" => "炎"];
$Mewtwo = ["name" => "ミュウツー","level" => "100","type" => "エスパー"];

//foreach ($配列の変数 as　$変数 ){
 //   実行内容;
 //} 

$player_list = ["大谷","ダルビッシュ","山本"];
foreach ($player_list as $player){
    echo $player. "<br>";
}
// 大谷
// ダルビッシュ
// 山本

//foreachの配列のkeyを使う方法
// foreach ($配列の変数　as $キーの変数 => $変数){
//     実行内容;
// } 
$player_list = ["大谷","ダルビッシュ","山本"];
foreach ($player_list as $key => $player){
    if($key === 0){
        echo $player. "とプレイしたい<br>";
    }
}
//大谷とプレイしたい

//foreachの配列のkeyを使う方法
// foreach ($配列の変数　as $キーの変数 => $変数){
//     実行内容;
// } 
$player_list = ["大谷","ダルビッシュ","山本"];
foreach ($player_list as $key => $player){
    if($key === 0){
        echo $player. "とプレイしたい<br>";
    }
}
//大谷とプレイしたい

$player_list = [
    "Messi" =>"メッシ" ,
    "Ronald"=>"ロナウド" ,
    "Neymar"=>"ネイマール",
];

foreach ($player_list as $key => $player){
    if($key === "Messi"){
        echo $player. "とプレイしたい<br>";
    }
}
//メッシとプレイしたい

//foreach文の中で配列の要素の値を変える
$fruits = [
    "apple" => 100,
    "orange" => 150,
    "pineapple"=>300, 
];

foreach ($fruits as &$fruit){
  $fruit = $fruit * 0.8;
}
echo print_r($fruits). "<br>";

//配列の大元を書き換える

$fruits = [
    "apple" => 100,
    "orange" => 150,
    "pineapple"=>300, 
];

foreach ($fruits as $key => $fruit){
  $fruits[$key] *= 0.8;
}
echo print_r($fruits). "<br>";
//Array ( [apple] => 80 [orange] => 120 [pineapple] => 240 ) 1

//繰り返しの中で繰り返し
$player_list = [
    "MLB" => [
        ["大谷", 29, "ドジャース"],
        ["ダルビッシュ", 37, "パドレス"],
        ["吉田",30,"レッドソックス"]
    ],
    "NPB" => [
        ["村上", 24, "ヤクルト"],
        ["田中", 35, "楽天"],
        ["近藤", 30, "ソフトバンク"]
    ],
];

foreach ($player_list as $player_league){
    foreach($player_league as $baseball_player){
        echo $baseball_player[0]. "は". $baseball_player[1]. "歳で". $baseball_player[2]."所属です。<br>";
    }
}
