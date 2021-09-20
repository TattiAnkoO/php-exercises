<?php
$arr1= array();
echo("<pre>");
for ($i = 0; $i < 3; $i++) {
    for ($a = 0; $a < 4; $a++){
        $arr=rand(1, 4);
        $arr1 [$i][]=$arr;
        echo ($arr);
    }
    echo("<br>");
};
for ($i=0; $i<4; $i++){
    for ($a=0; $a<3;$a++){
        $arr[$a][$i]=$arr1;
    }
};