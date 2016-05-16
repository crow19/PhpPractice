<?php
    //D027
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $n = $input_lines;
    for($i=1;$i<=$n;$i++){
        $b = $b + $i;
    }
    echo $b;
?>
