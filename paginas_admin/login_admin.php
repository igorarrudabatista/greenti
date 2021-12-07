<?php

    $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
    echo $erro;
?>

<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
 <head>
  <link rel="Stylesheet" type="text/css" href="login_admin.css">
  <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="Stylesheet">
  <meta charset="utf-8">
  <script type="text/javascript" src="javascript.js"></script>

<link rel="apple-touch-icon" sizes="57x57" href="C:\xampp\htdocs\Chronos\img\icone\apple-icon-57x57.png">
	  <link rel="apple-touch-icon" sizes="60x60" href="C:\xampp\htdocs\Chronos\img\icone\apple-icon-60x60.png">
	  <link rel="apple-touch-icon" sizes="72x72" href="C:\xampp\htdocs\Chronos\img\icone\pple-icon-72x72.png">
	  <link rel="apple-touch-icon" sizes="76x76" href="C:\xampp\htdocs\Chronos\img\icone\apple-icon-76x76.png">
	  <link rel="apple-touch-icon" sizes="114x114" href="C:\xampp\htdocs\Chronos\img\icone\apple-icon-114x114.png">
	  <link rel="apple-touch-icon" sizes="120x120" href="C:\xampp\htdocs\Chronos\img\icone\apple-icon-120x120.png">
	  <link rel="apple-touch-icon" sizes="144x144" href="C:\xampp\htdocs\Chronos\img\icone\apple-icon-144x144.png">
	  <link rel="apple-touch-icon" sizes="152x152" href="C:\xampp\htdocs\Chronos\img\icone\apple-icon-152x152.png">
	  <link rel="apple-touch-icon" sizes="180x180" href="C:\xampp\htdocs\Chronos\img\icone\apple-icon-180x180.png">
	  <link rel="icon" type="image/png" sizes="192x192"  href="C:\xampp\htdocs\Chronos\img\icone\android-icon-192x192.png">
	  <link rel="icon" type="image/png" sizes="32x32" href="C:\xampp\htdocs\Chronos\img\icone\android-icon-36x36.png">
	  <link rel="icon" type="image/png" sizes="96x96" href="C:\xampp\htdocs\Chronos\img\icone\favicon-96x96.png">
	  <link rel="icon" type="image/png" sizes="16x16" href="C:\xampp\htdocs\Chronos\img\icone\favicon-16x16.png">
	  <link rel="manifest" href="C:\xampp\htdocs\Chronos\img\icone\manifest.json">
  <title>Tela de Login Administrador</title>
 </head>
 <body>
     
  <div class="login"> 
    <img src="C:\xampp\htdocs\Chronos\img\login.png">
    <h1>Login ADM</h1>
   
   





    <form name="form1" method="post" action="validar_acesso.php" ; id="formLogin">
   
    <p>Usuário</p>
    <input type="text" name="usuario" placeholder="Insira seu nome de usuário">

    <p>Senha</p>
    <input type="password" name="senha" placeholder="Insira sua senha">
    
    
    <input type="submit" name="conflg" value="Login">
    <a href="#">Esqueceu sua senha?</a>
    
   </form>

      <?php
                if ($erro == 1){
                    echo '<font color="#FFFFFF">Usuário e ou senha inválido(s) </font>';
                }
        ?>



 
 </body>
</html>