<?php
$arr1 = array();
echo("<pre>");
for ($i = 0; $i < 3; $i++) { //кол цифр в ряде
    for ($a = 0; $a < 4; $a++){ //столбец
        $arr=rand(1, 4);
        $arr1[$i+6][]=$arr;
        echo ($arr);
    }
    //$arr1[$i+1] = $i;
    // echo ($i);
    //echo rand(1, 4);
    echo("<br>");
};
var_dump($arr1);
//$arr = array_combine($arr1,[$i+6][]=$arr);
//print_r($arr1);
echo("<br>");
?>