<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $input_lines1 = trim(fgets(STDIN));

    $n = explode(" ", $input_lines);
    $m = explode(" ", $input_lines1);

    /*個数*/
    $number = $n[0];
    /*人数*/
    $people = $n[1];
    /*ランク上位*/
    $rank = $n[2];

    for($i=1;$i<=$people;$i++){
        $input_lines2 = trim(fgets(STDIN));
        $o[$i] = explode(" ", $input_lines2);
    }

    $result = array();

    $j=0;

    for($j=0;$j<$people;$j++){
        $p = 0;
        for($k=0;$k<$number;$k++){
            $p += $m[$k] * $o[$j][$k];
        }
        $result[$j] = (int)round($p);
    }

    rsort($result);

    for($l=0;$l<$rank;$l++){
        echo $result[$l]."\n";
    }
?>
