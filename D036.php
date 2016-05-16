<?php
    // D036
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $n = $input_lines;
    $s = str_replace("at", "@", $n);
    echo $s;
?>
