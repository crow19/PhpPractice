<?php
    // D013
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $n = explode(" ", $input_lines);
    $b = (int)$n[0] / $n[1];
    $s = $n[0] % $n[1];
    echo (int)$b . ' ' . $s;
?>
