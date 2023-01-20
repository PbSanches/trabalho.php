<?php
    $host = "localhost";
    $bancodedados = "cortes";
    $usuario = "root";
    $senha = "1234";
  
  $con = mysqli_connect($host, $usuario, $senha,$bancodedados);
  $conn = new mysqli($host, $usuario, $senha, $bancodedados);
  if($conn->connect_errno) {
    echo "Falha ao conectar: (". $conn->connect_errno.")" . $conn->connect_error;
  }
?>