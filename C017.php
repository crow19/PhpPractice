<?php
    // C017
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $input_lines1 = trim(fgets(STDIN));

    $a = explode(" ", $input_lines);
    $b = explode(" ", $input_lines1);

    for($i=1;$i<=$b[0];$i++){
        $input_lines2 = trim(fgets(STDIN));
        $c = explode(" ", $input_lines2);
        if($a[0] > $c[0]){
            echo "High\n";
        }
        elseif($a[0] == $c[0] and $a[1] < $c[1]){
            echo "High\n";
        }
        else{
            echo "Low\n";
        }
    }
?>
