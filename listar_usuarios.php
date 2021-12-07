<?php
include("menu.php");
$consulta = "SELECT * FROM usuarios";
$con= $mysqli->query($consulta) or die($mysqli->error);
?>

 <section class="consstent">
        <!-- left column -->
        <div class="col-md-12" >
          <!-- general form elements -->
            <div class="box-header with-border">
              <br>
              <h3 class="box-title">Usuários do sistema</h3>
            <p> Alunos com cadastro no sistema irão aparecer aqui. </p>
            </div>



              <div class="table-responsive">


                <table class="table table-bordered table-hover table-sm" id="dataTable" width="100%" cellspacing="0">

                  <thead>
                    <tr>
                      <th> <b> Nome: </b></th>

                      <th><b> E-mail: </b></th>
                      <th><b> Telefone: </b></th>
                      <th><b> Tipo de acesso: </b></th>


                    </tr>
                  </thead>

                  
                  </tfoot>

      <?php while($dado = $con->fetch_array()) { ?>
      <tr>
      <td><?php echo $dado['nome']; ?></td>
      <td><?php echo $dado['email']; ?></td>
      <td><?php echo $dado['telefone']; ?></td>
      <td><?php echo $dado['niveldeacesso']; ?></td>


 
    
    <?php } ?>


                  </tbody>
                </table>
            <!-- /.box-header -->
            <!-- form start -->
         
            </div> </div> </div>
            <!-- /.box-body -->
    
    </section>
    <!-- /.content -->
  </div>