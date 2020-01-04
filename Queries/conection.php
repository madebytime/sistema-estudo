<?php
    //conexão com o banco de dados
    $conn = new PDO('mysql:host=localhost;dbname=estudo; charset=utf8', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>