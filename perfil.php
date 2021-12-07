<?php
include("menu.php");

$id = (int)  $_SESSION['id']; //Recebo o ID da sessão do usuário logado e o transformo em variável $id
$consulta   = "SELECT * FROM usuarios WHERE id = '$id'"; //consulta sql direto no banco
$con        = $mysqli->query($consulta) or die($mysqli->error);
$dado       = $con->fetch_assoc();

?>


<div class="form-group col-md-4">

</div>

<div class="meio" align="center">
    <form method="post" action="editar_usuarios.php" id="formLogin" enctype="multipart/form-data"><br>

    <img src="<?php echo $dado['imagem']; ?>" width = "200px" height= "200px">
    <div class="form-group">
      <div class="col-sm-6"><br>
        <input type="file" class="form-data" name="image"  placeholder="Foto">
      </div>
</form>
    <br>   
             <div class="form-group col-md-6">



              <input type="text" class="form-control" id="nome" minlength="3" maxlength="100" name="nome" placeholder="Nome:"  required="" value="<?php if (!empty($dado) && isset($dado['nome'])) { echo $dado['nome']; } else { echo 'dado vazio'; } ?>"> <!-- Nesta parte estou consultando o nome na tabela usuarios e o inserindo no campo, caso dê erro a mensagem dado vazio irá aparecer na tela em vez do dado da tabela usuarios. -->
          </div>

          <div class="form-group col-md-6">

            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php if (!empty($dado) && isset($dado['email'])) { echo $dado['email']; } else { echo ''; } ?>">
            </div>
        </div> 

        <div class="form-group col-md-6">

            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone" value="<?php if (!empty($dado) && isset($dado['telefone'])) { echo $dado['telefone']; } else { echo ''; } ?>">
            </div>
        </div> 
        <div class="form-group col-md-6">
           <label>Tipo de acesso:</label>

        <select name="niveldeacesso"> 
        <option value="Aluno" <?php if (!empty($dado) && isset($dado['niveldeacesso']) && $dado['niveldeacesso'] == 'Aluno') { echo 'selected'; } else { echo ''; } ?>>Aluno</option>
        <option value="Ex-Aluno" <?php if (!empty($dado) && isset($dado['niveldeacesso']) && $dado['niveldeacesso'] == 'Ex-Aluno') { echo 'selected'; } else { echo ''; } ?>>Ex Aluno</option>
        <?php if ($_SESSION['perfil'] == 'ADM') { ?>
         <option value="ADM" <?php if (!empty($dado) && isset($dado['niveldeacesso']) && $dado['niveldeacesso'] == 'ADM') { echo 'selected'; } else { echo ''; } ?>>ADM</option>
        <?php } ?>
      </select>  
        </div>


        <div class="form-group col-md-6">

            <div class="box-body">

                <div class="input-group"> 
                    <span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" >
                </div>


            </div> <br>


            <button class="btn btn-primary" type="butom" id="btn_login" value="SALVAR"> Editar perfil</button>

            <!-- <button class="bot1" type="reset" value="EDITAR" style="background-color:rgb(223, 141, 141)">  -->    

            </form>



        </div><br><br><br>

        <?php
        include("rodape.php");
        ?>
