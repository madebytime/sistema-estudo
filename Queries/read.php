<?php
try {
    require('conection.php');
    $stmt = $conn->prepare("select * from users INNER JOIN curso ON users.cod_curso = curso.id_curso");
    $stmt->execute();
    $dados = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();  
}
if (isset($_POST['ajax'])){
    print_r(json_encode($dados));
}
?>
