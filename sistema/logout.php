<?php 
session_start();
session_destroy(); //Destrói a sessão do usuário.
header("location: login.php"); // Redirecionamento para a tela de Login.

//recurso utilizado para encerrar a sessão. Usuário precisa estar logado para executar este procedimento.
?>