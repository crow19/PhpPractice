<?php

//　D006
// 自分の得意な言語で
// Let's チャレンジ！！
$input_lines = trim(fgets(STDIN));
$n = explode(' ', $input_lines);
$x = $n[0];
$y = $n[1];

if($y == 'cm'){
    echo $x*10;
}
if ($y == 'm') {
    echo $x*100*10;
}
if ($y == 'km') {
    echo $x*1000*100*10;
}

?>
