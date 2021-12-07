<!DOCTYPE html>

<html>

<head>
    <!-- jQuery -->
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <!-- SweetAlert -->

</head>


<body>
<?PHP
session_start();


if (! $_SESSION['logado']) {
    header('Location:  login.php');
}

include('conexao/db.php');

$nome     = ucwords($_POST['nome']); # Coloca a primeira letra da string em maiúsculo
$email    = $_POST['email'];
$telefone = $_POST['telefone'];
$niveldeacesso = $_POST['niveldeacesso'];
$senha    = md5($_POST['senha']);

$sql= "INSERT INTO usuarios (nome, email, senha, telefone, imagem, niveldeacesso) 
	   VALUES ('$nome', '$email', '$senha', '$telefone','','$niveldeacesso')";


				$in = mysqli_query($mysqli, $sql);
				if ($in) { 
						
?>
<script>
    swal("Sucesso!", "Usuário cadastrado com sucesso!", "success")
        .then(results => {
        window.location.href = "login.php";
    });
</script>

<?php } else {
	print_r ("Erro ao cadastrar usuário " .mysqli_error()); 

} 


 ?>
	

</body>


</html>
