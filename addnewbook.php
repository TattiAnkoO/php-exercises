<?PHP
//echo "<pre>";
//var_dump($_POST);
//die();
$servername = "localhost";
$username = "root";
$dbname = "lib";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username);
    $stmt = $conn->prepare("INSERT Autor, Book, Lang FROM lib");
    $stmt = $conn->prepare("INSERT Library (Autor, Book, Lang) Values (:Autor, :Book, :Lang)");
    $stmt->bindParam( ':Autor',$_POST['autor'],PDO::PARAM_STR| PDO::PARAM_INPUT_OUTPUT);
    $stmt->bindParam( ':Book',$_POST['name'],PDO::PARAM_STR| PDO::PARAM_INPUT_OUTPUT);
    $stmt->bindParam( ':Lang',$_POST['lang'],PDO::PARAM_STR| PDO::PARAM_INPUT_OUTPUT);
    $stmt->EXECUTE();
