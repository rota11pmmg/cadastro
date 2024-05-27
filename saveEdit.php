<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $matricula = $_POST['matricula'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        
        
        
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',senha='$senha',matricula='$matricula',cpf='$cpf',telefone='$telefone'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>