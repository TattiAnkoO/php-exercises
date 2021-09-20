<?php
//$demo=10;
//
////function demot(){
////    $int=5;
////    $demo = 'tttttt '.$int .' <br>' ;
////    echo $demo;
////}
//// demot();
////echo $demo;
//$arr = [1,2,3,4,5];
//$res=[];
//foreach ($arr as $item){
//    $res[] = $item++;
//    $test = 10;
//}
//var_dump($res, $test);
// echo("<br>");
//function funct($abc){
//    $number = 10+$abc;
//    return $number;
//}
//$a=funct(1);
//$b=funct(5);
//echo("<br>");
//echo $a;
//echo("<br>");
//echo $b;

function getTable($rows, $cols){
    // $rows = 20; // количество строк, tr
    // $cols = 20; // количество столбцов, td
    $table = '<table border="10">';
    //var_dump($table);
    for ($tr=1; $tr<=$rows; $tr++){
        $table .= '<tr>';
       // var_dump($table);
        for ($td=1; $td<=$cols; $td++){
            if ($tr===1 or $td===1){
               // var_dump($tr);
               // var_dump($td);
                //var_dump($table);
                $table .= '<th style="color:#000000;background-color:#04ee04;">' . $tr*$td .'</th>';
                //var_dump($tr*$td);
            }else{
                $table .= '<td>'. $tr*$td .'</td>';
               // var_dump($table);
            }
        }
        $table .= '</tr>';
    }
    $table .= '</table>';
    echo $table;
}
echo("<br>");
getTable(3,3);// выводим таблицу умножения 3 на 3
echo("<br>");
getTable(5,5); // выводим таблицу умножения 5 на 5
echo("<br>");
getTable(10,10); // выводим таблицу умножения 10 на 10
echo("<br>");
getTable(30,30);
echo("<br>");
?>