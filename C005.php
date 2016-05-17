<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $n = $input_lines;
    for($i=1; $i<=$n; $i++){
        $a[$i] = trim(fgets(STDIN));
        $s = '.';
        $cnt = substr_count($a[$i], $s);
        if($a[$i] < 255 and $cnt == 3){
                echo "True\n";
        }
        else{
            echo "False\n";
        }
    }
?>
