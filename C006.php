<?php
    // C016
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $n = $input_lines;

    $a = array("A", "E", "G", "I","O", "S", "Z");
    $b = array("4", "3", "6", "1","0", "5", "2");
    $arr = str_replace($a, $b, $n);

    echo $arr;
?>
