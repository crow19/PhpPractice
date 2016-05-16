<?php
    // D037
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $input_lines1 = trim(fgets(STDIN));

    $a = $input_lines;
    $b = $input_lines1;

    $s = $b / $a;
    $c = $b % $a;

    if($c == 0){
        echo (int)$s;
    }
    else{
        echo (int)$s+1;
    }
?>
