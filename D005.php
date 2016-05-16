<?php

//　D005
// 自分の得意な言語で
// Let's チャレンジ！！
$input_lines = fgets(STDIN);
$a = explode(" ", $input_lines);
$x = $a[0];
$y = $a[1];
echo $x. " ";

for($i=1; $i<=9; $i++){
    $x = $x + $y;
    if($i < 9){
        echo $x . " ";
    }elseif($i==9){
        echo $x;
    }
}

?>
