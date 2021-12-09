 <!DOCTYPE html>
<html lang="pt-br">
<head>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

</html>
<?php
session_start();
include("conexao/db.php");


if (! $_SESSION['logado']) {
    header('Location: login.php');
}

    $id = (int)  $_SESSION['id']; 
    $consulta   = "SELECT * FROM usuarios WHERE id = '$id'";
    $con        = $mysqli->query($consulta) or die($mysqli->error);
    $dado       = $con->fetch_assoc();

    $nome = ucwords($mysqli->escape_string($_POST['nome'])); # Coloca a primeira letra da string em maiúsculo
    $telefone = $_POST['telefone'];
    $email =  $mysqli->escape_string($_POST['email']);
    $senha =  md5($_POST['senha']);
    $niveldeacesso =  $_POST['niveldeacesso'];

    $foto = $_FILES['image']['tmp_name'];

    $tamanho_permitido = 1024000; //1 MB
    $pasta = 'fotos';



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

    $novoDestino = $dado['imagem'];
}

    $query = "UPDATE usuarios SET nome = '$nome', email = '$email', telefone = '$telefone', imagem = '$novoDestino', niveldeacesso = '$niveldeacesso', ";


    if (!empty($_POST['senha'])) {
        $query .= "senha = '$senha', ";
    }
    $query .= "niveldeacesso = '$niveldeacesso' WHERE id = '$id'";



$in = mysqli_query($mysqli, $query);
                if ($in) { 
                        
?>

<script>
    swal("Sucesso!", "Perfil Editado com sucesso!", "success")
        .then(results => {
        window.location.href = "perfil.php";
    });
</script>

<?php } else {
    print_r ("Erro ao cadastrar usuário " .mysqli_error()); 

} 


 ?>