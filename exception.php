<?php

function throwException(){
    $bool = false;
    $bool->method();
}

try{
    // new PDO('','','');
    $bool = false;//bool格納
    $bool->method();//メソッドを呼ぶ処理 //ここでエラー発生
    throwException();
    echo '通常処理が実行<br>';

//例外が起こりうる処理
} catch(PDOException $e){
    //例外が起きた時の処理
    echo 'PDOException<br>';
    echo '例外処理が実行<br>';
    echo $e->getMessage() .'<br>';

} catch(Error $e){
    //例外が起きた時の処理
    echo '例外処理が実行<br>';
    echo $e->getMessage() .'<br>';

} finally{
    //例外が起きても起きなくても必ず実行される処理
    echo '終了処理<br>';
}
echo 'finallyは終了しました';
?>
