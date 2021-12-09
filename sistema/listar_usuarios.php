<?php
include("base.php");

$id = (int)  $_SESSION['id']; //Recebo o ID da sessão do usuário logado e o transformo em variável $id
$consulta   = "SELECT * FROM usuarios"; //consulta sql direto no banco
$con        = $mysqli->query($consulta) or die($mysqli->error);
$dado       = $con->fetch_assoc();

?>

       <!-- Begin Page Content -->

       <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Lista de usuários cadastrado no sistema</h1>
                       <p></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Listando...</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th> <b> Nome </b> </th>
                                            <th> <b> E-mail </b> </th>
                                            <th> <b> Telefone </b> </th>
                                            <th> <b> Nível de acesso </b> </th>
                                            <th> <b> Foto </b> </th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>Telefone</th>
                                            <th>Nível de acesso</th>
                                            <th> Foto</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php while($dado = $con->fetch_array()) { ?> 

                                        <tr>


                                              
                                            <td> <?php echo $dado['nome']; ?>  </td>
                                            <td> <?php echo $dado['email']; ?>  </td>
                                            <td> <?php echo $dado['telefone']; ?>  </td>
                                            <td> <?php echo $dado['niveldeacesso']; ?>  </td>
                                            <td> <img src="<?php echo $dado['imagem']; ?>" width = "100px" height= "100px"> </td>

                                        


                                        </tr>

                                        <?php } ?> 
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php
include 'rodape.php';  // Solicito os dados do menu e exibo na tela.
?>


