<?php
include("base.php");

?>

<div class="container-fluid">

    <h1>Cadastrar Pedido</h1>

<form action="cadastrar_equipamento.php" name="cadastro" id="cadastro" method="post" enctype="multipart/form-data">


  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputText4">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
    </div>  
    
    <div class="form-group col-md-4">
      <label for="inputEmail4">E-mail</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
    </div>
</div>

    <div class="form-row">
    <div class="form-group col-md-4">
    <label for="inputAddress">Telefone </label>
    <input type="number" class="form-control" id="telefone" name="telefone" placeholder="(DDD) + Telefone">
  </div>

  <div class="form-group col-md-4">
      <label for="inputAddress">Endereço</label>
      <input type="text" name="endereco" id="endereco" class="form-control">
    
    </div> </div>
    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputAddress">Cidade</label>
      <input type="text" name="cidade" id="cidade" class="form-control">
    
    </div>
    
 
  <div class="form-group col-md-4">
    <label for="inputPassword6">Estado</label>
    <select class="form-control" id="estado" name="estado" name="estado">
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espírito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
    <option value="EX">Estrangeiro</option>
</select>  </div>
    </div>
    
    <div class="form-row">
    <div class="form-group col-md-4">
    <label for="inputPassword6">Tipo de Equipamento</label>
    <select class="form-control" id="tipo" name="tipo" name="estado">
    <option value="Celular">Celular</option>
    <option value="Computador">Computador</option>
    <option value="Monitor">Monitor</option>
    <option value="Televisão">Televisão</option>
    <option value="Outros">Outros</option>
    <option value="Não sei">Não sei</option>
    
    </select>  
</div>
    </div>
<div class="form-row">
<div class="form-group col-md-4">
      <label for="inputAddress">Foto</label>
        <input type="file" class="form-data" name="image"  placeholder="Foto">
</div> </div>

  <input  type="submit" value="Cadastrar"  id="confirmar" name="confirmar" class="btn btn-info ">

</form>
</div>  </div>  
<?php
include("rodape.php");

?>