<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=estudo; charset=utf8', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("select * from users");
    $stmt->execute();
    $dados = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();  
}
if (isset($_POST['ajax'])){
    print_r(json_encode($dados));
}
?>
