<?php
try {
    session_start();
    require('conection.php');
    $data = $_POST['data'];
    $data = implode("-",array_reverse(explode("/",$data)));
    $_POST['data'] = $data;
    //inserção de dados no banco de dados        
    $stmt = $conn->prepare('UPDATE users SET usua_nome = :usua_nome ,usua_sobrenome = :usua_sobrenome
    usua_nascimento = :usua_dt_usuario, usua_sexo = :usua_in_sexo, usua_cpf = :usua_ds_cpf, usua_rg = :usua_ds_rg,
    usua_telefone = :usua_ds_telefone, usua_email = :usua_ds_email
     WHERE id_user = "'.$_POST['cod'].'"');
    $stmt->execute(array(
        ':usua_nm_usuario' => $_POST['nome'],
        ':usua_dt_usuario' => $_POST['data'],
        ':usua_in_sexo' => $_POST['sx'],
        ':usua_ds_cpf' => $_POST['cpf'],
        ':usua_ds_rg' => $_POST['rg'],
        ':usua_ds_telefone' => $_POST['tel'],
        ':usua_ds_email' => $_POST['email'],
    ));
    echo $stmt->rowCount();
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
if(isset($stmt)){
    $_SESSION['editado'] = 1;
    header('Location: ../userlist.php');
}