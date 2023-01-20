<?php
    include ("./conexao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    

    $sql = "INSERT INTO cliente (nome, email, senha)
            values ('{$nome}', '{$email}', '{$senha}')";

    $res = $conn-> query($sql);

    if($res == true) {
        echo  "<script>alert('cadastrado com sucesso');</script>";
    }
    header("Location: login.php");
?>