<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'Solodedoprepmare2024';
    $dbName = 'formulario-cadastro';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>