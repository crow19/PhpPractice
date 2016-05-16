<?php
    // D026
    // 自分の得意な言語で
    // Let's チャレンジ！！
    for($i=1;$i<=7;$i++){
        $n[$i] = trim(fgets(STDIN));
        if ($n[$i] == 'no'){
            $s = $s + 1;
        }
    }
    echo $s;
?>
