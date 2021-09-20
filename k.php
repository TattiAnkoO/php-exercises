<?
for ($x = 1; $x <= 10; $x++) {
    for ($a = 1; $a <= 10; $a++) {
        if ($a == 5) {
            echo "+";
        } else {
            echo "*";
        }
    }
    echo("<br>");
};
echo("<br>");
for ($y=0; $y<11; $y++) {
    for ($e=0; $e<=$y; $e++) {
        echo "*";
    }
    echo("<br>");
};
//var_dump("beforefor");
//var_dump(10>1);
for ($w=10; $w>=0; $w--) {
  // var_dump("infirstfor");
   // var_dump(0>=$w);
    for ($f=0; $f<=$w; $f++) {
        echo "*";
    }
    echo("<br>");
};
//$arr = array();
//echo("<pre>");
//for ($i = 0; $i < 3; $i++) {
 //   for ($a = 0; $a < 2; $a++){
  //      $arr[$a+1]=$a;
   //     echo rand(1, 4);
  //  }
  //  $arr[$i+1] = $i;
 //   echo ($i);
  //  echo rand(1, 4);
  //  echo("<br>");
//};
//echo("<br>");
//$arr = array();
//echo("<pre>");
//for ($i = 0; $i < 4; $i++) {
  //  for ($a = 0; $a < 1; $a++){
   //     $arr[$a+1]=$a;
    //    echo rand(1, 4);
   // }
   // $arr[$i+1] = $i;
    //echo ($i);
  //  echo rand(1, 4);
   // echo("<br>");
//};
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
//тут примеры с php
$names=array("John","David","Amy");
    foreach ($names as $name){
        echo $name.'<br/>';
};
  $today="Wed";
  switch($today) {
      case "Mon":
          echo "Today is Monday.";
          break;
      case "Tue":
          echo "Today is Tuesday.";
          break;
      case "Wed":
          echo"Today is Wednesday.";
          break;
      case "Thu":
          echo"Today is Thursday.";
          break;
      case "Fri":
          echo"Today is Friday.";
          break;
      case "Sut":
          echo"Today is Saturday.";
          break;
      case "Sun":
          echo "Today is Sunday.";
          break;
      default:
          echo"Invalid day.";
  };
   echo("<br>"); 
  $x=5;
  switch ($x) {
      case 1:
          echo "One";
          break;
      case 2:
          echo"Two";
          break;
      default:
          echo "No match";
  } ;
   echo("<br>");
//  for ($i=0;$i<=50;$i++){
//      echo ($i);
//      if($i==5) {
//          break;
//      }
//  };
  for($d;$d<15;$d++){
      if ($d%2!=0){
          continue;
      }
      echo $d.'';
  };
  echo("<br>");
  function sayHello(){
      echo "Hello!";
  }
  sayHello();
  echo("<br>");
  function myFunc(){
      echo"PHP is awensome!";
  }
  myFunc();
  echo("<br>");
  function multiplyByTwo($number) {
      $answer=$number*2;
      echo $answer;
  }
  multiplyByTwo(20);
  echo("<br>");
  function multiply ($num1,$num2) {
      echo $num1 * $num2;
  }
   multiply(50,5);
    echo("<br>");
    function setCountner($num=20) {
        echo "Counter is". $num;
    }
    setCountner(22);
    echo("<br>");
    setCountner();
    echo("<br>");
    echo("<br>");
    function mult ($num1, $num2){
        $res=$num1*$num2;
        return $res;
    }
    echo mult (8,3);
 echo("<br>");
 // что за странная функция??
echo "<pre>";
function func ($arg){
    $result=0;
    for($i=0;$i<=$arg;$i++){
        $result=$result+$i;
        var_dump($i);
        echo("<br>");
    }
    return $result;
}
echo func(2);
   echo("<br>");









