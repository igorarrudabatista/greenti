<?php 
		// REFERENCIA A PERFIL 

	require_once('../conexao/db.php');

	$usuario = $_POST['usuario']; //Recebe os dados do formulário
	$email = $_POST['email'];	
	$telefone = $_POST['telefone'];
	$senha = $_POST['senha'];


	$objDb = new db();
	$link = $objDb->conecta_mysql();

//insere na tabela usuários os dados preenchidos no formulário.
	$sql = " insert into usuarios(usuario, email, telefone, senha) values ('$usuario', '$email', '$telefone', '$senha') "; 

	//executar a query nonexao e o link 
	if (mysqli_query($link, $sql)){
		echo 'Usuário registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o usuário!';
	}
	
	$usu_codigo = intval($_GET['id']);

	$sql_code = "DELETE FROM tb_usuarios WHERE id = '$usu_codigo'";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
?>