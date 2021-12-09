<?php
include("base.php");

?>

<div class="container-fluid">

    <h1>Cadastrar Novo Usuario</h1>

<form action="cadastrar_usuarios.php" name="cadastro" id="cadastro" method="post">


  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputText4">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
    </div>  
    
    <div class="form-group col-md-4">
      <label for="inputEmail4">E-mail</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Password">
    </div>
</div>

    <div class="form-row">
    <div class="form-group col-md-4">
    <label for="inputAddress">Telefone </label>
    <input type="number" class="form-control" id="telefone" name="telefone" placeholder="(DDD) + Telefone">
  </div>

  <div class="form-group col-md-4">
      <label for="inputState">Tipo de Acesso</label>
      <select name="niveldeacesso" id="niveldeacesso" class="form-control">
        <option selected>Administrador</option>
        <option>Restrito</option>
      </select>
    </div>
    </div>
    <div class="form-row">
  <div class="form-group col-md-4">
    <label for="inputPassword6">Senha</label>
    <input type="password" class="form-control" id="senha" name="senha" placeholder="">
  </div>
</div>
  
    

  <input  type="submit" value="Cadastrar"  id="confirmar" name="confirmar" class="btn btn-info ">

</form>
</div>  </div>  
<?php
include("rodape.php");

?>