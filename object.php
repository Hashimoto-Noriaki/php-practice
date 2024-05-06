<?php
//クラス/オブジェクト指向
//設計図/クラスを使ったプログラミングの組み立て方
//ポケモンがたたかう、道具を使う、ポケモンを入れ替える、逃げるコマンドが書かれた設計書
//自分のポケモン、あなたのポケモンで毎回設計書を作るのは、面倒。使いまわす
//紙1枚の設計図だけでは意味がないので、実際のポケモンを作って動かす。(オブジェクト)

class Pokemon 
{
    //メンバ変数　HP
    public $hitPoint;

    //初期化メソッド
    public function __construct()
    {
        $this->hitPoint = 40;
        echo "最初のHPは" . $this->hitPoint . "です！<br>";
    }

    //メンバメソッド　　たたかう(技は10万ボルトだけにします。)
    function attack ($point){
        echo "攻撃によって、相手のポケモンに" . $point . "のダメージ<br>";
    }

    //メンバメソッド　　道具
    function items()
    {
        echo "道具を使う<br>";
    }

    //手持ちポケモン
    function my_pokemon()
    {
        echo "ポケモンを変える<br>";
    }

    //逃げる
    function escape (){
        echo "逃げる<br>";
    }

    //攻撃されたからHPが減る
    public function pokemon_attacked($point)
    {
        $this->pokemon_damaged($point); //攻撃を受けたメッセージ表示　 下のpokemon_damagedから呼び出されている
        $this->hitPoint -= $point; //HPが減る
        echo "残りHPは" . $this->hitPoint . "だ！<br>";
    }
    //ダメージを受けた
    private function pokemon_damaged($point)
    {
        echo "相手のポケモンからダメージを受けた<br>";
        echo $point . "のダメージ<br>";
    }
}


//オブジェクト化して作成
$new_pokemon = new Pokemon();
$new_pokemon->hitPoint = 20; //ポケモンのHP
//戦うのメンバーメソッドを実行
//$new_pokemon->attack()
//メンバメソッドの引数 
$new_pokemon->attack(7);

//オブジェクト化して作成
$new_pokemon = new Pokemon();

//アクセス修飾子
$new_pokemon->pokemon_attacked(5);
