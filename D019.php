<?php
    //　D019:文字列からN番目
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $n = explode(" ", $input_lines);
    $c = intval($n[1]) - 1;
    $a = substr($n[0], $c, 1);

    echo $a;
?>
