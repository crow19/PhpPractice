<?php

// D002:数の比較
// 自分の得意な言語で
// Let's チャレンジ！！
$input_lines = fgets(STDIN);
$n = explode(" ", $input_lines);

if ($n[0] > $n[1]){
    echo $a;
}
elseif ($n[0] < $n[1]) {
    echo $b;
}
else {
    echo "eq";
}

?>
