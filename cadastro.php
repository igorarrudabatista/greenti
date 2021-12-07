<!DOCTYPE html>
<html lang="pt_br" dir="ltr">
 <head>
  <link rel="stylesheet" type="text/css" href="css/cadastro.css">
  <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="Stylesheet">
  <meta charset="utf-8">
  <script type="text/javascript" src="js/javascript.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <link rel="apple-touch-icon" sizes="57x57"   href="Assets/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60"   href="Assets/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72"   href="Assets/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76"   href="Assets/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="Assets/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="Assets/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="Assets/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="Assets/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="Assets/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="Assets/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="Assets/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="Assets/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="Assets/favicon-16x16.png">
  <link rel="manifest" href="Assets/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="Assets/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <title>Cadastrar Novo Usuario</title>
  </head>
  <body>
     
  <div class="login"> 
    <img src="img/logo.jpg">
    <h1>Cadastrar Novo Usuario</h1>

<form action="cadastrar_usuarios.php" name="cadastro" id="cadastro" method="post">
              <div class="box-body">

                <div class="form-group col-md-6">
      <label>Nome:</label>
      <input type="text" class="form-control" id="nome" minlength="3" maxlength="100" name="nome"   required="" >
    </div>
     <div class="form-group col-md-6">

                  <label>E-mail:</label>

            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
              </div>

      </div> 
   
        <div class="form-group col-md-6">

            <label>Telefone com DDD:</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone com DDD">
              </div>

      </div> 
        <div class="form-group col-md-6">
          <label>Tipo de Acesso:</label>
        <select name="niveldeacesso" id="niveldeacesso"> 
        <option>Aluno </option>
        <option>Ex Aluno</option>
      </select>  
        </div>  
        <br>

 <div class="form-group col-md-6">

                <div class="box-body">
      <label>Senha:</label>
      <div class="input-group"> 
                <span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
              </div>
              </div> 
 
       <div class="form-group col-md-4">

       </div>
              <!-- /.box-body -->

              <div class="box-footer">
  <input type="submit" value="Cadastrar"  id="confirmar" name="confirmar" class="btn btn-info btn-user btn-block but_comando">
              </div>
            </form>

 
 </body>
</html>