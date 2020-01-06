<?php
try {
    session_start();
    require('conection.php');
    
    $id= $_POST['id'];
    $stmt = $conn->prepare('DELETE * FROM users WHERE cod_users = $id');
    $stmt->execute();

    echo $stmt->rowCount();
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
