<?php
// function 関数名(引数1,引数2,引数3, ...){
//     //実行内容
//   return 戻り値;
//   }

//関数
//自己紹介のテンプレ
introduce();
//太郎です。埼玉県出身です。
echo "あなたの出身は？<br>";
//新しい人と出会う
//自己紹介テンプレ
function introduce(){
    echo "太郎です。東京都出身です<br>";
}
introduce();

//女性のスペック
$looks = "美人"; //見た目
$style = "おしゃれ"; //服装
$personality = "性格がいい"; //性格
$height = 170; //身長
$income = 800; //年収

//男性の求める基準
$men_looks = "美人"; //理想の見た目
$men_style = "おしゃれ";  //理想の服装
$men_personality = "性格がいい"; //
$men_height = 160; //希望身長
$men_income = 600; //年収

function woman_spec_check($desired_name, $spec, $man_like){
    echo $desired_name. ":";
    if ($spec === $man_like){
        echo $spec. "なら付き合いたい<br>";
    }else{
        echo $spec. "なら付き合いたくない<br>";
    }
}

//呼び出し側
woman_spec_check("見た目", $looks, $men_looks);
woman_spec_check("服装", $style, $men_style);
woman_spec_check("性格", $personality, $men_personality);
woman_spec_check("身長", (string)$height, (string)$men_height); // 文字列に変換
woman_spec_check("年収", (string)$income, (string)$men_income); // 文字列に変換


//引数
//男のスペック
$deviationScore = 65;//偏差値
$height = 190;//身長
$income = 600;
//女性の理想
$femaleLikeDeviationScore = 60;//希望偏差値
$femaleLikeHeight = 180;//希望身長
$femaleLikeIncome = 1000;//希望年収

//関数
function specChecker($specName,$spec,$femaleLike){
    echo $specName. ":";
    
}



//返り値
function test_score_Average($Japanese, $English, $math)
{
    $average = ($Japanese + $English + $math) / 3;
    return $average; //averageが返り値 関数の値を出すことができる
    //returnより下は処理されない
}
//関数を呼び出す
$testAverage = test_score_Average(80, 100, 60);
echo "3人の平均点は" . $testAverage . "点です。";
