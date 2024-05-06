<?php
for ($count = 0; $count < 15; $count++ ){
    echo $count . "<br>";
}

//break

//10000円以上働いたら中断
$money = 0;
for ($hour = 1; $hour <=8; $hour++){
    $money = $hour * 2000;
    if ($money > 10000){
        echo "現在". $hour. "働いて". $money. "円です。 12000円以上働いたから帰る!". "<br>";
        break;
    }
    echo "今". $hour. "時間働いて". $money. "円です。<br>";
}
//繰り返しの中の繰り返し
$money = 0;
$rest = 0;
for ($hour = 0; $hour <= 8;  $hour++){  //時間のループ9回
    $money = $money * 1000;
    for ($i = 1; $i <= 2; $i++){
        //休憩のループ2回
        $rest++;
        if ($rest > 10){
            echo "今" . $rest . "回休憩して" . $money . "円です。退勤";
            break 2;
        }
    }
        echo "今" . $hour . "時間働いて" . $money . "円です。<br>";
}

//continue
//残業チェッカー　8時間未満:残業ない　8時間以上:残業中
for ($hour = 1; $hour <= 10; $hour++){
    if($hour >=8){
        echo  "今" . $hour . "時間働いて残業中". "<br>";
        continue;
    }
    echo "今" . $hour . "時間働いて残業していない". "<br>";
}


for ($inning = 1; $inning <= 9; $inning++) {
    if ($inning >= 5) {
        echo "今" . $inning . "回投げた。 次の日は登板できません。<br>";
        continue;
    }
    echo "今" . $inning . "回投げた。 次の日は登板できます。<br>";
}

//フルで100球まで投げれるのでbreakで終わらせることはできない
