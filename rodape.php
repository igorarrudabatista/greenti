 <footer class="main-footer">
    <div style="background-color: #363636;  text-align: center; color: #fff;" class="pull-right hidden-xs ">
 Todos os Direitos reservados <hr>Contato: Telefone(65) 9999-99999 E-mail ******_*****@****.***

    </div>
  </footer>
   

            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

            <!-- Bloco de código o qual desabilita o botão da página novo_agendamento.php e insere todos os campos como obrigatório. Somente após o preenchimento de todos os campos o botão de CONFIRMAR será habilitado. -->
        
        	<script>
        		$(function(){
					$('#confag').prop('disabled', true);

        			$(document).on('keyup change', '.frequired', function(e){
                        var desabilitarBotao = true;

                        $('.frequired').each(function(){
                            var valorDoCampo = this.value;
                            if ((valorDoCampo) && (valorDoCampo.trim() !== '')) {
                                desabilitarBotao = false;
                            } else {
                                desabilitarBotao = true;
                                return false;
                            }
                        });

                        if (desabilitarBotao) {
                            $('#confag').prop('disabled', true);    
                        } else {
                            $('#confag').prop('disabled', false);   
                        }
                    }); 

        		});					   
            	</script>

</body>
</html>