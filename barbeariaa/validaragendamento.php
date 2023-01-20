<?php
    include ("./conexao.php");
        $servico = $_POST['servicos'];
        $saveServico = explode("+", $servico);
        $servicoId = intval($saveServico[0]);
        $servicoPreco = $saveServico[1];
        $profissa = $_POST['barbeiros'];
        $date = $_POST['tempo'];
        $cliente = $_SESSION['id'];
        
        $sql = "INSERT INTO atendimento (fk_profi, fk_serv, horario, preço, fk_cliente)
            values ('{$profissa}', '{$servicoId}', '{$date}', '{$servicoPreco}', '{$cliente}')";

        $res = $conn-> query($sql);
       
        if($res == true) {
            echo  "<script>alert('agendado com sucesso');</script>";
        }
         header("Location: listaagenda.php");
    ?>