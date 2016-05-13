<?php
    // D033:頭文字
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $a = explode(" ", $input_lines);
    $a[0] = substr($a[0], 0, 1);
    $a[1] = substr($a[1], 0, 1);
    echo $a[0] . "." . $a[1];
?>
