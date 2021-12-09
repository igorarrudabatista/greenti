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
$endereco = $_POST['endereco'];
$tipo     = $_POST['tipo'];
$foto     = $_FILES['image']['tmp_name'];
$cidade   = $_POST['cidade'];
$estado   = $_POST['estado'];

$tamanho_permitido = 1024000; //1 MB
$pasta = 'fotos_pedidos';



if (!empty($foto)) {

$file = getimagesize($foto);

//TESTA O TAMANHO DO ARQUIVO
if($_FILES['image']['size'] > $tamanho_permitido){
    echo "erro - arquivo muito grande";
    exit();
}

//TESTA A EXTENSÃO DO ARQUIVO
if(!preg_match('/^image\/(?:gif|jpg|jpeg|png)$/i', $file['mime'])){
    echo "erro - extensão não permitida";
    exit();
}

//CAPTURA A EXTENSÃO DO ARQUIVO
$extensao = str_ireplace("/", "", strchr($file['mime'], "/"));

//MONTA O CAMINHO DO NOVO DESTINO
$novoDestino = "{$pasta}/foto_arquivo_".uniqid('', true) . '.' . $extensao;  
move_uploaded_file ($foto , $novoDestino );

} else {

$novoDestino = $dado['image'];
}


$sql = "INSERT INTO contato SET nome = '$nome', email = '$email', telefone = '$telefone', endereco = '$endereco', tipo = '$tipo', foto = '$novoDestino', cidade = '$cidade', estado = '$estado' ";


				$in = mysqli_query($mysqli, $sql);
				if ($in) { 
						
?>
<script>
    swal("Sucesso!", "Cadastrado com sucesso!", "success")
        .then(results => {
        window.location.href = "cadastra_contato.php";
    });
</script>

<?php } else {
	print_r ("Erro! Por favor, tente novamente. " .mysqli_error()); 

} 


 ?>
	

</body>


</html>
