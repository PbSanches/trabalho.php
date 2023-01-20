<?php
    include ("./conexao.php");
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM cliente WHERE email= '$email' and senha = '$senha'";
    $res = $conn-> query($sql);
    $quantidade = $res->num_rows;

    if($quantidade == 1) {

        $usuario = $res->fetch_assoc();
        if(!isset($_SESSION)) {
            session_start(); 
        }

        $_SESSION['login'] = true;
        $_SESSION['id'] = $usuario['ID'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['Email'];

        header("Location: agendamento.php");

    } else {
        echo  "<script>alert('Email ou senha incorretos!');</script>";
        include('login.php');
    }
        
    
?>