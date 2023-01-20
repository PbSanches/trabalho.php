<?php
        include("conexao.php");
        $sql = "SELECT * FROM profissional";
        $sql2 = "SELECT * FROM servico";
        $profissa = $con-> query($sql);
        $servico = $con-> query($sql2);
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<a href="#" class="logo">WebCut✂️</a>
<body>
      <center>  <form action="validaragendamento.php" method="POST">
        <label for="time">data pretendida</label>

        <input type="date" id="time" name="tempo" /> </br>

        <label for="barbeiro-select">escolha o profissional:</label> 
        
        <select name="barbeiros" id="babeiro-select">
                <?php while($teste = mysqli_fetch_assoc($profissa)) {
                    echo "<option value= ".$teste['ID'].">".$teste['nome']." </option>";
                };
                
                        ?>
                    
                </select> </br>  
        
        <label for="servico-select">escolha tipo de atendimento:</label>
        <select name="servicos" id="servico-select">
        <?php while($teste2 = mysqli_fetch_assoc($servico)) {
            echo "<option value= ".$teste2['ID']."+".$teste2['preço'].">".$teste2['titulo']." ".$teste2['preço']."</option>";
                };
                        ?>   
    
        </select>

                <input type="submit" value="agendar">
        </form>  
        
        </center>