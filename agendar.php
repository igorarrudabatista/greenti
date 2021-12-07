<!DOCTYPE html>

<html>

<head>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <!-- SweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>


<body>
<?PHP
session_start();


if (! $_SESSION['logado']) {
    header('Location: ' . 'login.php');
}

include('conexao/db.php');

$setor     = ucwords($_POST['setor']); # Coloca a primeira letra da string em maiúsculo
$data      = $_POST['data'];
$hora      = $_POST['hora'];
$mensagem  = $_POST['mensagem'];
$tipo  = $_POST['tipo'];
$id_usuario =$_SESSION['id'];

$sql= "INSERT INTO agendamento (data, hora, setor, mensagem, id_usuario, tipo) 
	    VALUES ('$data', '$hora', '$setor', '$mensagem', '$id_usuario', '$tipo')";

				$in = mysqli_query($mysqli, $sql);
				if ($in) { 
						
?>
<script>
    swal("Sucesso!", "Agendamento realizado com sucesso!", "success")
        .then(results => {
        window.location.href = "meus_agendamentos.php";
    });
</script>

<?php } else {
	print_r ("Erro ao cadastrar usuário " .mysqli_error()); 

} 


 ?>
	

</body>


</html>
