<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
 <head>
  <link rel="Stylesheet" type="text/css" href="cadastro.css">
  <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="Stylesheet">
  <meta charset="utf-8">
  <script type="text/javascript" src="javascript.js"></script>

  <link rel="apple-touch-icon" sizes="57x57" href="C:\xampp\htdocs\Chronos/Assets/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="C:\xampp\htdocs\Chronos/Assets/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="C:\xampp\htdocs\Chronos/Assets/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="C:\xampp\htdocs\Chronos/Assets/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="C:\xampp\htdocs\Chronos/Assets/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="C:\xampp\htdocs\Chronos/Assets/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="C:\xampp\htdocs\Chronos/Assets/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="C:\xampp\htdocs\Chronos/Assets/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="C:\xampp\htdocs\Chronos/Assets/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="C:\xampp\htdocs\Chronos/Assets/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="C:\xampp\htdocs\Chronos/Assets/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="C:\xampp\htdocs\Chronos/Assets/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="C:\xampp\htdocs\Chronos/Assets/favicon-16x16.png">
  <link rel="manifest" href="C:\xampp\htdocs\Chronos/Assets/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="C:\xampp\htdocs\Chronos/Assets/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <title>Cadastrar Novo Usuario</title>
 </head>
 <body>
     
  <div class="login"> 
    <img src="C:\xampp\htdocs\Chronos\img\login.png">
    <h1>Cadastrar Novo Usuario</h1>



   <form name="form1" method="post" action="registra_perfil.php" id="formLogin";>
   
    <p>Usuário*</p>
    <input type="text" id="usuario" name="usuario" placeholder="Insira seu nome de usuário">

    <p>E-mail*</p>
    <input type="email" id="email" name="email" placeholder="Insira seu E-mail">

    <p>Telefone</p>
    <input type="tel" id="telefone" name="telefone" placeholder="Insira seu Telefone">

    <p>Senha*</p>
    <input type="password" id="senha" name="senha" placeholder="Insira sua senha">
    <input type="submit" name="conflg" value="Confirmar">
    
    
   </form>


   
 
 </body>
</html>