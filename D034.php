<?php
    // D034
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $n = 21 % $input_lines;
    if ($n == 0){
        echo $input_lines;
    }
    else{
        echo $n;
    }
?>
