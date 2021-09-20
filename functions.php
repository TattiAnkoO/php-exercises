<?php


if($_POST){
   // var_dump($_POST);
    $servername = "localhost";
    $username = "root";
    $password=  "root";
    $dbname = "library";
    $conn = new \PDO('mysql:host=localhost; dbname=library; charset=utf8', 'root','root');

    if($_POST['param'] == 'getOne') {
        getOne($conn, $_POST['id']);
    }  elseif ($_POST['param'] == 'add') {
        add ($conn,$_POST['Autor'],$_POST['Book'],$_POST['Lang']);

    }elseif ($_POST['param'] == 'edit') {
        edit ($conn,$_POST['id'],$_POST['Autor'],$_POST['Book'],$_POST['Lang']);

    } elseif ($_POST['param'] == 'delete') {
        delete($conn, $_POST['id']);

    }
}
function getOne($conn, $id) {
    $sql = "SELECT * FROM library WHERE id = :id";
//  echo ($sql);
//    var_dump($conn);
//    var_dump ($id);
//  var_dump($sql);
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->execute();
    //var_dump( $stmt);
    if($stmt){
        response($stmt->fetchAll());
    }
}
function delete($conn, $id) {
    $sql = "DELETE FROM library WHERE id = (:id)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->execute();
    if($stmt){
        response('Delete is done');
    }
}
function edit ($conn,$id,$Autor,$Book, $Lang) {
    $sql="UPDATE library SET (id:'id',Autor:'Autor', Book:'Book', Lang:'Lang') where 'id' = (:id)";
    $stmt = $conn->prepare($sql);
//    var_dump($sql);
//    var_dump($conn);var_dump( $Autor);var_dump($Book);var_dump($Lang);
// код обновления записи в базе
    $stmt->bindParam( 'id',$id,PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT);
    $stmt->bindParam( ':Autor',$Autor,PDO::PARAM_STR| PDO::PARAM_INPUT_OUTPUT);
    $stmt->bindParam( ':Book',$Book,PDO::PARAM_STR| PDO::PARAM_INPUT_OUTPUT);
    $stmt->bindParam( ':Lang',$Lang,PDO::PARAM_STR| PDO::PARAM_INPUT_OUTPUT);
    $stmt->EXECUTE();
    if($stmt){
        response('Changed done');
    }
}

function add ($conn, $Autor,$Book, $Lang) {
    $sql="INSERT  library (Autor, Book, Lang) VALUES (:Autor, :Book, :Lang)";
    $stmt = $conn->prepare($sql);
//    var_dump($sql);
//    var_dump($conn);var_dump( $Autor);var_dump($Book);var_dump($Lang);
    $stmt->bindParam( ':Autor',$Autor,PDO::PARAM_STR| PDO::PARAM_INPUT_OUTPUT);
    $stmt->bindParam( ':Book',$Book,PDO::PARAM_STR| PDO::PARAM_INPUT_OUTPUT);
    $stmt->bindParam( ':Lang',$Lang,PDO::PARAM_STR| PDO::PARAM_INPUT_OUTPUT);
    $stmt->EXECUTE();
    $a=$conn->lastInsertId();
    if($stmt){
        //var_dump($sql);
        $sql = "SELECT * from library where id = (:id)";
        $stmt = $conn->prepare($sql);
       // var_dump($stmt);
        $stmt->bindParam( ':id',$a,PDO::PARAM_STR| PDO::PARAM_INPUT_OUTPUT);
        $stmt->execute();
        //var_dump($a);
     $v=$stmt->fetchAll(PDO::FETCH_ASSOC);
       // echo var_dump(die);
        response($v);
    }

}

function response($data) {
    echo json_encode($data);
}
//include 'stylesforSQL.php';
