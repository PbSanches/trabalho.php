<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <a href="./agendamento.php" class="logo">WebCut✂️</a>
<div>
    <div class="container">
            <?php
                    include("conexao.php");
                    $sql =
                     "SELECT * FROM atendimento INNER JOIN servico ON atendimento.fk_serv = servico.id
                        INNER JOIN profissional ON atendimento.fk_profi = profissional.id";

                    $res = $con-> query($sql) or die("Falha na execução do código SQL:" . $con->error);
            ?> 

        <div class="InfoProduto">
        <form action="validaVenda.php" method="POST">
        
        <?php
                while($user_data = mysqli_fetch_assoc($res)) {
                    echo"<tr>";
                    echo"<h3> CORTE:".$user_data['titulo']."</h3>";;
                    echo"<br>";
                    echo"<h3> NOME:".$user_data['nome']."</h3>";
                    echo"<br>";
                    echo"<h3> PREÇO:" .$user_data['preço']."</h3>";
                    echo"<br>";
                    echo"<h3> DATA:" .$user_data['horario']."</h3>";
                    echo"<br>";
                    echo"</tr>";
                }
                
            ?>        
        </div>   
</div>
</body>
</html>