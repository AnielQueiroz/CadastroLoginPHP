<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPass = '';
    $dbName = 'formulario';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPass, $dbName);

    if($conexao->connect_errno){
        echo 'Erro na conexão com o Banco de Dados';
    }else{
        echo 'Conexão efetuada com Sucesso!';
    }
?>