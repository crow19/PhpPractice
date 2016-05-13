<?php
    // D002:数の比較
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $n = explode(" ", $input_lines);
    $a = ($n[0] < 1000) ? $n[0] : $c ;
    $b = ($n[1] < 1000) ? $n[1] : $d ;
    if ($a > $b){
        echo $a;
    }elseif ($a < $b) {
        echo $b;
    }elseif ($a == $b){
        echo "eq";
    }
?>
