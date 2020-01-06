<?php
try {
    include_once("conection.php");
    $user_nome = $_POST['user_nome'];
    $user_sobrenome = $_POST['user_sobrenome'];
    $user_nascimento = $_POST['user_nascimento'];
    $user_endereco = $_POST['user_endereco'];
    $user_telefone = $_POST['user_telefone'];
    $user_cpf = $_POST['user_cpf'];
    $user_rg = $_POST['user_rg'];
    $user_email = $_POST['user_email'];
    $user_sexo =$_POST['user_sexo'];

    $data = $_POST['user_nascimento'];
    $data = implode("-",array_reverse(explode("/",$data)));
    $_POST['user_nascimento'] = $data;
    //inserção de dados no banco de dados
    $sql = "INSERT INTO users(cod_perfil, cod_curso, usua_nome, usua_sobrenome, usua_nascimento,usua_endereco,usua_telefone,usua_cpf,usua_rg,usua_sexo, usua_email) 
    VALUES ('1','1','$user_nome','$user_sobrenome','$user_nascimento','$user_endereco','$user_telefone','$user_cpf','$user_rg','$user_email','$user_sexo')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount();
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>