<?php

    $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
    echo $erro;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perfil do Usuario</title>

        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

        <link rel="stylesheet" href="perfil.css">

        <script>
               $(document).ready(function(){
                //verificar se os campos de usuáriuo e senha foram devidamentes preenchidos
                $('$btn_login').click(function(){
                    alert('Botão entrar foi clicado');
                });

               });

        </script>
    </head>
    <body>
        <div class="menu">
            <img src="img\logo.jpg" align="left">
            <ul>
            <li><a href="pagina_incial.php" style="color:white">Pagina Inicial</a></li>
                <li><a href="novo_agendamento.php" style="color:white" >Novo Agendamento</a></li>
                <li><a href="meus_agendamentos.php" style="color:white" >Meus Agendamentos</a></li>
                <li><a href="historico.php" style="color:white" >Historico</a></li>
            </ul>
        </div>
 
        <div class="foto" align="center">
            <img src="img\perfil.png"><br>
            <input type="button" value="Alterar Foto">     
        </div>
        <div class="meio" align="center">

           



            <form method="post" action="validar_acesso.php" id="formLogin" > <br>
     
            Nome:<input type="text" for="" name="usuario" >
            
            Senha:<input for="" name="senha"> 
            <button class="bot1" type="buttom" id="btn_login" value="SALVAR" style="background-color:rgb(156, 235, 156)"> LOGIN</button>

            <!-- <button class="bot1" type="reset" value="EDITAR" style="background-color:rgb(223, 141, 141)">  --> 
            </form>






            <!-- FORMULÁRIO PHP ARQUIVO  validar_acesso.php -->
             <?php
                if ($erro == 1){
                    echo '<font color="#FFFFFF">Usuário e ou senha inválido(s) </font>';
                }
             ?>


        </div>
 
        <div class="roda" align="center">
        Todos os Direitos reservados <hr>Contato: Telefone(65)****-**** E-mail ******_*****@****.***
        </div>


    </body>
</html>