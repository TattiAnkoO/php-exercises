<?php
 /* разбор чисел*/
$a=10;
echo $a;
echo ("<br>");
$a=-10;
echo $a;
echo ("<br>");
$a=010;//восьмеричная система вычисления
echo $a;
echo ("<br>");
$a=0x10;//шестнадцаричной системе счисления
echo $a;
echo ("<br>");
$a=0b10;//двоичная система вычисления
$a1=$a*10;
echo $a1;
echo ("<br>");
$a=5e+10;//перемещение десятичной степени +
echo $a;
echo ("<br>");
$a=12e-3;//перемещение десятичной степени -
echo $a;
echo ("<br>");
   /* разбор string*/
$str = "string";
echo "I have little cat. His <br> name is Bubon";
echo ("<br>");
            // ??   //Heredoc
            //$num = 33;
            //echo <<<"other_id"
            //Kount: $num
            //other_id. >>> ;
//   в строку через точку
$str = "Kount ";
$num = $a;
echo " This is number:" . $num ;
echo ("<br>");
//глобальная функция
$age = 30;
function birth() {
    global $age;// переменная как глобальная
    $age = $age + 1; // увеличиваем значение переменной age на 1
}
birth();// вызов функ
echo $age;
echo ("<br>");
$a = 6;
$b = 2;
function Sum() {
    $GLOBALS['a'] = $GLOBALS['a'] + $GLOBALS['b'];
}
Sum();
echo $a;
echo ("<br>");
//статические переменные
function birt() {
    static $age = 0;// определяем  age как статическую
    $age = $age + 3;
    echo "Statik:". $age;
}
birt() ;
echo ("<br>");
birt();
echo ("<br>");
birt();
echo ("<br>");
$x = 3;
$y = 5;
echo $x ^ $y;
echo ("<br>");
$y = 5;
echo $y << 2;//  5 * 4
echo ("<br>");
$y = 20;
echo $y >> 2;// 20 / 4
echo ("<br>");
//if else
$username = 'Charlie';
if ($username == 'Admin') {
    echo 'Welcome, dear administrator';
}
elseif ($username == 'Guest') {
    echo 'Go away';
}
else if ($username == 'Charlie') {
    echo "Welcome  $username!";
}
else {
    echo ('Welcome to the guest page');
}
//switch !!
if ($action == 'JUMP') {
    echo "I jump";
} elseif ($action == 'SWEEM') {
    echo "I sweem";
} elseif ($action == 'FLY') {
    echo "I fly";
}
switch ($action) {
    case 'JUMP':
        echo "I jump";
        break;
    case 'SWEEM':
        echo "I sweem";
        break;
    case 'FLY':
        echo "I fly";
        break;}
echo ("<br>");
//goto
goto foo;       // указываем желаемую метку
echo 'hello';
foo:            // указываем место куда нужно перейти
echo 'world';
echo ("<br>");
function foo($num) {
    if($num == 10)
        return "$num is 10";
    else
        return "$num isn't  10";
}
echo foo(rand(1,10));
echo ("<br>");
$str=<<<HTML_END
Today is sunny day. I am happy wake up healfy.
HTML_END;
echo $str;
echo ("<br>");
$today = date("d.m.y h:i:s a");
echo $today;
echo ("<br>");
echo rand(0, 1000);
echo ("<br>");
$text="Paro";
echo "edet {$text}voz<br/>";
echo "plyviot {$text}hod<br/>";
echo ("<br>");


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
    echo "-------------------------";
    echo("<br>");
    if ($figur1[0] < $figur1[1] + $figur1[2] and $figur1[1] < $figur1[2] + $figur1[0] and $figur1[2] < $figur1[0] + $figur1[1]) {
        echo "This is 3kut";
        $treug[] = $figur1;
        echo("<br>");
        s($figur1);
    };
    echo("<br>");
}
echo("<br>");
function p ($figur1, $figur2, $figur3) {
    echo "Side A is ". $figur1;
    echo("<br>");
    echo "Side B is ". $figur2;
    echo("<br>");
    echo "Side C is ". $figur3;
    echo("<br>");
    $p = ($figur1 +  $figur1 + $figur1) / 2;
    return $p;
};
function p1 ($fig) {
    var_dump($fig[0]);
    var_dump($fig[1]);
    var_dump($fig[2]);
    $p1 = ($figur1 +  $figur1 + $figur1) / 2;
    return $p1;
};
echo ("<br>");
function s ($fig) {
    $s = p($fig[0], $fig[1], $fig[2]);
    $s = sqrt($s * ($s - $fig[0]) * ($s - $fig[1]) * ($s - $fig[2]));
    echo "Area = ". round($s, 2);
    return $s;
    s([10, 12, 15]);
}
echo ("<br>");

?>