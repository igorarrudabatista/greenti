
            /*Validação Pagina de Login*/ 
function validacao1() {

    
    if(document.form1.nome.value==""){
        alert("Por favor, preencha o campo nome.");
        document.form1.nome.focus();
        return false;
    }
    if(document.form1.senha.value==""){
        alert("Por favor, preencha o campo senha.");
        document.form1.senha.focus();
        return false;
    }

     /*Validação Pagina de cadastro de agendamento*/ 
}
function validacao(){
    if(document.form.data.value==""){
        alert("Por favor, preencha o campo data.");
        document.form.data.focus();
        return false;
    }
    if(document.form.hora.value==""){
        alert("Por favor, preencha o campo hora.");
        document.form.hora.focus();
        return false;
}

if (document.form.selecset.options[selecset.selectedIndex].value=="")
        {
           alert("Por favor, Selecione o setor de agendamento");
           document.form.selecset.focus();
           return false;
        }
        
        if (document.form.selectip.options[selectip.selectedIndex].value=="")
        {
           alert("Por favor, Selecione o tipo de agendamento");
           document.form.selectip.focus();
           return false;
        }
        return true;

}



    
    
