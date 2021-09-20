<?php
echo ("array");
$array = array(5, 9, 16);
echo ("sum(array)=") .
    array_sum($array = array(5, 9, 16));
echo ("<br>");
echo ("count(array)=");
var_dump(count($array));
echo ("<br>");
$var = (array_sum($array = array(5, 9, 16)) / (count($array)));
echo ("$var");
