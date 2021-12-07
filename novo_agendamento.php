<?php
include 'menu.php';
?>
    <div class="container" align="center">
        <br>
        <h4>CADASTRAR AGENDAMENTO</h4>
        <form action="agendar.php" name="agendar" id="agendar" method="post">

                <label>SELECIONE A DATA:</label> 
                <input type="date" id="data" name="data" class="frequired">
                <br><br>
                <label>SELECIONE A HORA: </label>
                <input type="time" id="hora" name="hora" class="frequired">
                <br><br>
                <select name="setor" id="setor" name="setor" class="frequired"> 
                <option value="" selected="selected" disabled="">SELECIONE O SETOR DE ATENDIMENTO </option>

                <option value="RECEPCAO">RECEPÇÃO</option>
                <option value="SECRETARIA">SECRETARIA</option> 
                <option value="DIRECAO">DIREÇÃO</option> </select>
                <br><br>
                <select name="tipo" id="tipo" name="tipo" class="frequired"> 
                <option value="" selected="selected" disabled="">SELECIONE O TIPO DE ATENDIMENTO </option>

                <option value="PAGAMENTO">PAGAMENTO</option>
                <option value="MATRICULA">MATRÍCULA</option> 
                <option value="RECLAMACOES">RECLAMAÇÕES</option> </select>
                <br><br>

                <label>Mensagem:</label> <br>
                <textarea rows="10" cols="40" maxlength="500" name="mensagem" id="mensagem" class="frequired"> </textarea>   <br><br>
                <input id="confag" class="btn btn-primary"  type="submit" value="Confirmar">
                <input id="limpag" class="btn btn-danger" type="reset" value="Limpar">         
        
        </form>
            </div> </div>
      <br><br>
            <?php
include 'rodape.php';
?>

          