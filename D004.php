<?php

// D004
// 自分の得意な言語で
// Let's チャレンジ！！
$input_lines = trim(fgets(STDIN));
$n = $input_lines;
$c = "Hello". " ";

for($i=1; $i<=$n; $i++){
    $s[$i] = trim(fgets(STDIN));
    if($i < $n){
     $c .= $s[$i]. ",";
    }
    elseif ($i==$n){
        $c .= $s[$i]. ".";
    }
}
    echo $c;
?>
