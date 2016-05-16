<?php
    // D040
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $a = 0;
    for($i=1; $i<=7; $i++){
        $s[$i] = trim(fgets(STDIN));
        if($s[$i] <= 30){
            $a = $a + 1;
        }
    }
    echo $a;
?>
