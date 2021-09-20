
<?php
$servername = "localhost";
$username = "root";
$dbname = "lib";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username);
$id = $_POST['id'];
$stmt = $conn->prepare("UPDATE Autor, Book, Lang FROM lib");
    $stmt = $conn->prepare("UPDATE Library (Autor, Book, Lang) Values (:Autor, :Book, :Lang)");
    $stmt->bindParam( ':Autor',$_POST['autor'],PDO::PARAM_STR);
    $stmt->bindParam( ':Book',$_POST['name'],PDO::PARAM_STR);
    $stmt->bindParam( ':Lang',$_POST['lang'],PDO::PARAM_STR);
    $stmt->execute();



