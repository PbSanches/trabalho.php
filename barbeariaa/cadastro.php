<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="logincadastro.css"/>
    <title>CADASTRO</title>
</head>
<body>


    <header>
    <a href="./agendamento.php" class="logo">WebCut✂️</a>
    </header>
    
    <section class="area-cadastro">  
        
        <div class="cadastro">
    
            <form action="salvacadastro.php" method="POST">
                <input type="text" name="nome" placeholder="*Nome Completo"> <br>
                <input type="email" name="email" placeholder="*E-mail"> <br>
                <input type="password" name="senha" placeholder="*senha (Mínimo 6 caracteres)"> <br>
                    <p></p>
                    <p></p>
                    
            <center>    
                    <div clas="checkbox">
                <input type="checkbox" name="informacoes" id="1">
                <label for="informacoes">Desejo receber promoções, novidades e informações da WebCut .</label>
                    <br> <hr> <br> 
                <input type="checkbox" name="politica" id="2">
                <label for="politica">Li e aceito a Política de Privacidade e Proteção de Dados da WebCut e os Termos de Uso.</label>            
                    <p></p>
                     <hr> <br>
                <input type="radio" name="robo"> 
            
                <label>NÃO SOU UM ROBÔ</label>
                
                    </div>
            </center>
                    <p></p>
                <input type="submit" value="Cadastrar">   
        
            </form>           
            
        </div>
</section>    
</body>
</html>