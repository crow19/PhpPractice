<?php
    // D010
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $input_lines1 = fgets(STDIN);
    $input_lines = rtrim($input_lines);
    $b = $input_lines . "@" . $input_lines1;
    echo $b;
?>
