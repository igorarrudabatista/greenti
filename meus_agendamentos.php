<?php
include 'menu.php'; // solicita a pagina menu.php


include('conexao/db.php'); // solicita a conexão com o banco de dados.

$idUsuario = $_SESSION['id']; //Recebe o ID da sessão e transforma em variável ($idUsuario).

$query =  "select 
            *
          from 
            usuarios
          where id = '$idUsuario'"; // Obtem dados do usuario logado
        

$sql_query  = $mysqli->query($query) or die($mysqli->error);
$retorno    = $sql_query->fetch_assoc();

$consulta = "select
              ag.data, ag.hora, ag.tipo, ag.setor, ag.mensagem, us.nome
            from
              agendamento ag
            left join usuarios us On
              ag.id_usuario = us.id";  // Se ADM - Obtem todos os agendamentos

if ($retorno['niveldeacesso'] != 'ADM') {
  $consulta = $consulta . " where us.id = '$idUsuario'"; // Não ADM - Obtem meus agendamentos
}


  
$con= $mysqli->query($consulta) or die($mysqli->error);   

if ($con->num_rows > 0) {

$count=0 // Variável Count 
?>
    <br>
    <div class="meio" align="center">
      <h2> Meus Agendamentos </h2>        
        <form>
          <div class="container">
          <div class="row">

          <?php while($dado = $con->fetch_array()) {   //Função que solicita todos os dados das tabelas (Agendamento e Usuários) e apresenta na tela.

            $count++;
            if ($count % 2==0) { 
              $cor='#ccc'; // ALTERA a COR de fundo do CARD para CINZA.

            } else {
              $cor='#fff'; // ALTERA a COR de fundo do CARD para BRANCO.

            }
         ?>

<div class="card" style="width: 14rem; margin-top: 5px; background-color: <?php echo $cor;?>">

  <div class="card-body">
      <h6> <b> AGENDAMENTO </b></h6>
              <label for="data"><b> Data: </b>&nbsp;</label> <?php echo $dado['data']; ?> <br>
              <label for="hora"><b> Hora: </b></label> <?php echo $dado['hora']; ?>
              <br>
              <label for="setor"><b> Setor: </b></label> <?php echo $dado['setor']; ?>
              <br>
              <label for="setor"><b> Tipo: </b>&nbsp; </label> <?php echo $dado['tipo']; ?>
              <br>
              <label for="mensagem"><b>Mensagem:</b><?php echo $dado['mensagem']; ?> </label>

              <!-- Verificar -->
              <label for="nome"><b><small> Usuário:</b><?php echo $dado['nome']; ?> </small> </label>

              <br>

        
          </div>
          </div> 
                     
            &nbsp;

            
             <?php } 
              } else {
?>
  <div class="container">
  <div class="alert alert-danger" role="alert" style="margin-top: 100px">
  <center><b> Você não possui agendamentos! </b> </center>
</div>
</div>
<?php
              }
             ?>      

                       </div>
                     </div> 
        
              <br>        
      </form>
    </div>
  </b>
</label>
</div>
</div>
</div>
</div>
</form>
</div>
 

