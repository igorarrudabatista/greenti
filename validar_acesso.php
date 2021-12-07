<?php

// REFERENCIA A PERFIL2

	require_once('conexao\db.php');

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	//echo $usuario;
	//echo '<br />';
	//echo $senha;

	$sql = " SELECT * FROM usuarios WHERE e = '$usuario' AND senha = '$senha' ";

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){
		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['usuario'])){
			echo 'usuário existe';
		} else {
			header('Location:login_admin.php?erro=1');
		}

	} 
	else {
		echo 'Erro na execução';
	}


	



	//update retorna true ou falso
	//insert retorna true ou false
	//select retorna false caso exista problema, mas nao havendo erro o retorno é resource ma referencia externa(recuperar os dados da consulta)
	//delete  retorna true ou false

?>