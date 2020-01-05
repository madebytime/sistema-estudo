<?php
try {
    session_start();
    $conn = new PDO('mysql:host=localhost;dbname=estudo; charset=utf8', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id= $_POST['id'];
    $stmt = $conn->prepare('DELETE * FROM users WHERE cod_users = $id');
    $stmt->execute();

    echo $stmt->rowCount();
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
