<?php
session_start();

include 'conexao/db.php';
// inclusão da conexão com o banco de dados Mysql.

// Campos para validar o acesso será concedido ou não.

if (isset($_POST['acessar'])) {
    $email = $mysqli->escape_string($_POST['email']);
    $senha = md5($_POST['senha']);

    if (! empty($email)) {
        $_SESSION['email'] = $_POST['email'];
        
        $sql_code   = "SELECT id, nome, email, senha, telefone, niveldeacesso FROM usuarios WHERE email = '$email'";
        $sql_query  = $mysqli->query($sql_code) or die($mysqli->error);
        $dado       = $sql_query->fetch_assoc();
        $total      = $sql_query->num_rows;
        
        if ($total == 0) {
            $erro[] = "Este email nao pertence a nenhum usuario";
        } else {
            if  ($dado['senha'] == $senha) {
                $_SESSION['id']     = $dado['id'];
                $_SESSION['nome']   = $dado['nome'];
                $_SESSION['logado'] = true;
                $_SESSION['perfil'] = $dado['niveldeacesso'];
            } else {
                $erro[] = "Senha Incorreta";
            }
        }
        
        if (!isset($erro) || (count($erro) == 0)) {
            header('Location: index.php');
        }
    }
}

?>

<script>
    swal("Sucesso!", "Usuário salvo com sucesso!", "success")
        .then(results => {
        window.location.href = "index.php";
    });
</script>
   <!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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
     
  <!-- O Formulário abaixo utiliza as informações PHP do arquivo acima, ou seja, não há apontamento para outro arquivo após realizar o procedimento de login (usuario e senha). Nesta mesma página o metódo post valida as informações nesta página e se positivo autoriza a realização do login. -->
     
  <div class="login"> 
    <img src="img\logo.jpg">
    <h1>Login</h1>
 <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>"> 
<fieldset id="fie">
      <div class="form-group has-feedback">

        <p>Digite o seu E-mail:</p>

        <input value="<?php if (isset($_SESSION['email']) && !empty($_SESSION['email'])) { echo $_SESSION['email']; } else { echo ''; } ?>" type="email" class="form-control" id="email" name="email" placeholder="Digite o seu E-mail ">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <p> Senha </p>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite a sua Senha">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
         
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="acessar" class="btn btn-primary btn-block btn-flat">Entrar</button>
        </div>
         <a href="cadastro.php" style="color:white"> Não possui login? <br> Cadastre - se</a>

        <!-- /.col -->
      </div>
    </form>
 
 </body>
</html>