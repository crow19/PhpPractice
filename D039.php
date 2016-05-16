<?php
    // D039
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $input_lines1 = trim(fgets(STDIN));
    $input_lines2 = trim(fgets(STDIN));

    $a = $input_lines;
    $b = $input_lines1;
    $c = $input_lines2;

    if ($a == $b and $a == $c){
        echo "YES";
    }
    else{
        echo "NO";
    }

?>
