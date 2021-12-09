<?php
include("base.php");

$consulta   = "SELECT * FROM contato"; //consulta sql direto no banco
$con        = $mysqli->query($consulta) or die($mysqli->error);
$dado       = $con->fetch_assoc();

?>

       <!-- Begin Page Content -->

       <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Formulários preenchidos do site.</h1>
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
                                            <th> <b> Endereço </b> </th>
                                            <th> <b> Cidade </b> </th>
                                            <th> <b> Estado </b> </th>
                                            <th> <b> Tipo </b> </th>
                                            <th> <b> Foto </b> </th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>Telefone</th>
                                            <th>Endereço</th>
                                            <th>Cidade</th>
                                            <th>Estado</th>
                                            <th>Tipo</th>
                                            <th>Foto</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php while($dado = $con->fetch_array()) { ?> 

                                        <tr>


                                              
                                            <td> <?php echo $dado['nome']; ?>  </td>
                                            <td> <?php echo $dado['email']; ?>  </td>
                                            <td> <?php echo $dado['telefone']; ?>  </td>
                                            <td> <?php echo $dado['endereco']; ?>  </td>
                                            <td> <?php echo $dado['cidade']; ?>  </td>
                                            <td> <?php echo $dado['estado']; ?>  </td>
                                            <td> <?php echo $dado['tipo']; ?>  </td>


                                            <td> <img src="<?php echo $dado['foto']; ?>" width = "100px" height= "100px"> </td>

                                           
                                        


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


