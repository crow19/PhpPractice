<?php
    // D009
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $n = explode(" ", $input_lines);
    $s = $n[1] - $n[0];
    echo $s;
?>
