<?php
//$kvad = [
//          [3,3,3,3],
//          [4,4,4,4],
//          [5,5,5,5],
//];
//echo ("<pre>");
//$kv=[];
//foreach ($kvad as $kvad1) {
//    echo("<br>");
//    echo("<br>");
//    s($kvad1[0], $kvad1[1], $kvad1[ы2]);
//    echo "AREA KVADRATA = ";
//    ss($kvad1[0], $kvad1[1], $kvad1[2]);
//    echo("<br>");
//    echo "RADIUS = ";
//    r ($kvad1[0], $kvad1[1], $kvad1[2]);
//    echo("<br>");
//    echo "DIAGONAL = ";
//    d($kvad1[0], $kvad1[1], $kvad1[2]);
//}
//function s($kvad1){
//    echo "Sides of kvadrat = ". $kvad1;
//    echo("<br>");
//}
//function ss($kvad1){
//    $ss=$kvad1*2;
//    echo $ss;
//    return $ss;
//}
//function r ($kvad1){
//    $r=$kvad1/2;
//    echo $r;
//    return $r;
//}
//function d($kvad1) {
//    $d=sqrt(2) * $kvad1;
//    echo  round($d, 2);
//    return $d;
//}
$geom=[[3,3,8,3],
       [4,4,4,4],
       [5,5,5,5],
       [rand(1,50),rand(1,50),rand(1,50)],
       [rand(1,50),rand(1,50),rand(1,50)],
       [rand(1,50),rand(1,50),rand(1,50)],
];
echo ("<pre>");
$ge=[];
//var_dump($ge);
foreach ($geom as $geom1) {
    echo("<br>");
    echo "-------------------------";
    echo("<br>");
       //квадрат ($geom1[0]+$geom1[1]+$geom1[2]+$geom1[3]) / 4 === $geom1[0]
//    var_dump($geom);
//    var_dump($geom1);
//    var_dump($geom1[0] < $geom1[1] + $geom1[2]);
//    var_dump($geom1[0] < $geom1[1] + $geom1[2] and $geom1[1] < $geom1[2] + $geom1[0] and $geom1[2] < $geom1[0] + $geom1[1]);
    //var_dump($geom1 = 3);
   // var_dump(count($geom1)==6);
    if (  count ($geom1)==3) {
        if ($geom1[0] < $geom1[1] + $geom1[2] and $geom1[1] < $geom1[2] + $geom1[0] and $geom1[2] < $geom1[0] + $geom1[1]) {
            echo "This is triangle";
            $treug[] = $geom1;
            echo("<br>");
            AreaOfATriangle([$geom1[0], $geom1[1], $geom1[2]]);
        } else {echo "Were is triangle? Sides Error";
        }
        echo("<br>");
        echo("<br>");
    } elseif (count($geom1)==4 and ($geom1[0]+$geom1[1]+$geom1[2]+$geom1[3]) / 4 === $geom1[0]) {
        $ge[] = $geom1;
        echo "This is square";
        echo("<br>");
        echo("<br>");
        SidesOfASquare($geom1[0], $geom1[1], $geom1[2]);
        echo "AREA OF A SQUARE = ";
        AreaOfASquare($geom1[0], $geom1[1], $geom1[2]);
        echo("<br>");
        echo "RADIES = ";
        radies($geom1[0], $geom1[1], $geom1[2]);
        echo("<br>");
        echo "DIAGONAL = ";
        diagonal($geom1[0], $geom1[1], $geom1[2]);
    }
}
function p($geom1, $geom2, $geom3)
{
    echo "Side 1 triangle = " . $geom1;
    echo("<br>");
    echo "Side 2 triangle = " . $geom2;
    echo("<br>");
    echo "Side 3 triangle = " . $geom3;
    echo("<br>");
    $p = ($geom1 + $geom1 + $geom1) / 2;
    return $p;
}

function p1 ($geo)
{
    var_dump($geo[0]);
    var_dump($geo[1]);
    var_dump($geo[2]);
    $p1 = ($geom1 + $geom1 + $geom1) / 2;
    return $p1;
}
echo("<br>");
function AreaOfATriangle($geo)
{
    $str = p($geo[0], $geo[1], $geo[2]);
    $str = sqrt($str * ($str - $geo[0]) * ($str - $geo[1]) * ($str - $geo[2]));
    echo "Area = " . round($str, 2);
    return $str;
}
function SidesOfASquare($geom1)
{
    echo "Sides of a quare = " . $geom1;
    echo("<br>");
}
function AreaOfASquare($geom1)
{
    $skva = $geom1 * 2;
    echo $skva;
    return $skva;
}

function radies($geom1)
{
    $r = $geom1 / 2;
    echo $r;
    return $r;
}
function diagonal ($geom1)
{
    $d = sqrt(2) * $geom1;
    echo round($d, 2);
    return $d;
}

?>