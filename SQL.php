<?php
//session_start();
//if(!_SESSION['admin'])(
//    header("Location:enter.php");
//    exit();
//);
$servername = "localhost";
$username = "root";$password="root";
$dbname = "library";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
    $stmt = $conn->prepare("SELECT id, Autor, Book, Lang FROM library");
    $stmt->execute();
  // echo("<pre>");
    $v = $stmt->fetchAll(PDO::FETCH_ASSOC);
   // var_dump($v);
}catch(PDOException $e) {
    echo "hare";
    echo "Error: " . $e->getMessage();
}
$conn = null;
include 'stylesforSQL.php';
//echo $v;
//require_once'stylesforSQL.php';
