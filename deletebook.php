<?PHP
$servername = "localhost";
$username = "root";
$dbname = "lib";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username);
$id = $_POST['id'];

function del ($conn, $id){
    $sql = "DELETE FROM library WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->execute();

    if($stmt){
        $data = 'OK';
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}
    del ($conn, $id);

