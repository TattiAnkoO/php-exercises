<?php
echo ("<pre>");
function p ($a, $b, $c){
    //var_dump ("this is p");
    $p = ($a+$b+$c)/2;
    var_dump($p);
    return $p;
}
function const1 () {
   // var_dump ("this is const1");
    $abc =  p (1,1, 1);
    return $abc;
}
var_dump ("start");
 $c=const1 ();
echo ('<br>');

function s ($a,$b,$c) {
    $tes = p ($a, $b, $c);
    //var_dump ("this is area");
    $s=sqrt($tes*($tes-$a)*($tes-$b)*($tes-$c));
    echo "Area is".$s;
    return $tes;
}
s (3,4,4);

function hey () {
     var_dump ("this is hey");
    $ar =  s ($a,$b,$c);
    return $ar;
}
$q=hey ();
echo ('<br>');
function h ($a,$b,$c) {
     $are=s ($a,$b,$c);
     $ha1=2*$are/$a;
    var_dump ("ha");
    $ha2 =2*$are/$b;
    var_dump ("hb");
    $ha3 =2*$are/$c;
    var_dump ("hc");
    return $are;
};
h(2,3,4);
?>