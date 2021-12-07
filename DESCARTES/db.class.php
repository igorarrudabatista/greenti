<?php

	class db {
		private $host = 'localhost';
		private $usuario = 'root';
		private $senha = '';
		private $database = 'chronossga';

		public function conecta_mysql(){

			// Criar a conexão
			$con = mysqli_connect($this->host,$this->usuario,$this->senha,$this->database);

			//ajustar o charset de comunicação entre a aplicação e o banco de dados
			mysqli_set_charset($con, 'utf8');

			//verificar se houve erro de conexão
			if(mysqli_connect_errno()){
				echo 'Houve um erro ao tentar se conectar com o BD MySQL: ' .mysqli_connect_error();
			}

			return $con;


		}

	}

?>