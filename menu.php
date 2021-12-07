<?php
session_start();

include 'conexao/db.php'; // caminho do seu arquivo de conexão ao banco de dados


if (! $_SESSION['logado']) { 
    header('Location: login.php'); //Verifica se o usuário está logado, caso não ele será redirecionado para a tela de login. Somente será 
}

?>

	 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- link para o diretório onde o css está alocado -->
    <link rel="stylesheet" href="css/pagina_inicial.css">
    
    <!-- Vamos usar o SweetAlert para embelezar as mensagens de alerta do sistema. Para isso este script/link foi criado e linkado -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Também vamos utiliziar alguns elementos do Bootstrap. Para isso estamos linkando diretamente -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <link rel="apple-touch-icon" sizes="57x57" href="Assets\apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="Assets\apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="Assets\pple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="Assets\apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="Assets\apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="Assets\apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="Assets\apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="Assets\apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="Assets\apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="Assets\android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Assets\android-icon-36x36.png">
    <link rel="icon" type="image/png" sizes="96x96" href="Assets\favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Assets\favicon-16x16.png">

    <link rel="manifest" href="Assets\manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="Assests\ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Chronos</title>

    </head>
    <body>

    <!-- Menu do sistema -->
    <div class="menu">
        <a href="index.php"> <img src="img\logo.jpg" align="left" >
        <ul>
            <li><a href="index.php" style="color:white">Página Inicial</a></li>
                <li><a href="novo_agendamento.php" style="color:white">Novo Agendamento</a></li>
             
               
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Minha conta <small> <br><?php echo $_SESSION['nome']; ?> </small>
        </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="perfil.php">Editar Perfil</a>
          <a class="dropdown-item" href="meus_agendamentos.php">Meus agendamentos</a>

          <!-- Linha de código que habilita a página Listar Usuarios somente para quem receber o perfil ADM. -->
            <?php if ($_SESSION['perfil'] == 'ADM') { ?>
            <a class="dropdown-item" href="listar_usuarios.php">Usuários cadastrados</a>
          <?php } ?>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Sair</a>


        </div>
      </li>
 
        </ul>
    </div>
</a></div></body>