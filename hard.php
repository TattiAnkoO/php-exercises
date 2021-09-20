<?php
   $figur=[
        [rand(1,50),rand(1,50),rand(1,50)],
        [rand(1,50),rand(1,50),rand(1,50)],
        [rand(1,50),rand(1,50),rand(1,50)],
   ];
 echo ("<pre>");
  $treug=[];
    echo ("<br>");
 foreach ($figur as $figur1) {
     echo("<br>");
     echo '========================';
     echo("<br>");
     echo("<br>");
     if ($figur1[0] < $figur1[1] + $figur1[2] and $figur1[1] < $figur1[2] + $figur1[0]
         and $figur1[2] < $figur1[0] + $figur1[1]) {
         echo "This is treugolnik";
         $treug[] = $figur1;
         //var_dump($treug);
         //  p($figur1[0] , $figur1[1], $figur1[2]);
          // p1($figur1);
          s($figur1);
     };
 };
  function p ($figur1, $figur2, $figur3) {
     var_dump ("this is p");
     var_dump($figur1);
     var_dump($figur2);
     var_dump($figur3);
//     die ();
     $p = ($figur1 +  $figur1 + $figur1) / 2;
     var_dump($p);
     return $p;
 };
function p1 ($fig) {
    var_dump ("this is p1");
    var_dump($fig[0]);
    var_dump($fig[1]);
    var_dump($fig[2]);
    die ();
    $p1 = ($figur1 +  $figur1 + $figur1) / 2;
    var_dump($p);
    return $p;
};
 echo ("<br>");
 function s ($fig) {
     $s = p ($fig[0], $fig[1], $fig[2]);
     var_dump ($s);
     $s=sqrt($s*($s-$fig[0])*($s-$fig[1])*($s-$fig[2]));
     echo "Area is".$s;
     return $s;
 }
 s([22, 36, 32]);
echo ("<br>");
?>