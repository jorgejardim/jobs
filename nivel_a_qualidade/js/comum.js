/*
 * Grava Nome e Email
 */ 
function gravar_capture(el) {	
      
      el.submit();
      return true;            
}

/*
 * Grava Pagamento
 */ 
function gravar_pagamento(el) {	
    
    $('#pagamento_form .submit, #pesquisa_form .submit').hide();
    $('#pagamento_form .loading, #pesquisa_form .loading').show();
    
    el.submit();             
}

/*
 * ... document ready
 */ 
$(document).ready(function() {
    
    /*
     * Grava Nome e Email
     */         
    $("#capture_form").validate({
        rules:{
            email:{required: true, email: true}
        },
        messages:{
            email:{
                required: "Digite o seu e-mail para receber o LINK de ACESSO",
                email: "Digite um e-mail válido para receber o LINK de ACESSO"
            }
        },        
        submitHandler: function(form) {
            gravar_capture(form);
        }
    });       
    
    /*
     * Grava Compra
     */         
    $("#pagamento_form").validate({
        rules:{
            cep:               {required: true, minlength: 9},
            endereco:          {required: true, minlength: 2},
            numero:            {required: true},
            bairro:            {required: true, minlength: 2},
            cidade:            {required: true, minlength: 2},
            estado:            {required: true, minlength: 2},
            nome:              {required: true, minlength: 2},
            email:             {required: true, email: true},
            email_repete:      {required: true, equalTo: "#email"},
            cpf:               {required: true, verificaCPF: true},            
            ddd:               {required: true, minlength: 2},
            telefone:          {required: true, minlength: 8},            
            cartao_cpf:        {verificaCartaoCPF: true},
            cartao_nome:       {verificaCartaoNome: true},
            cartao_numero:     {verificaCartaoNumero: true},
            cartao_codigo:     {verificaCartaoCodigo: true},
            cartao_nascimento: {verificaCartaoNascimento: true}
        },
        messages:{
            cep:{
                required: "Digite o seu CEP",
                minlength: "Digite um CEP valido"
            },
            endereco:{
                required: "Digite o seu Endereço",
                minlength: "O seu Endereço deve conter, no mínimo, 2 caracteres"
            },
            numero:{
                required: "Digite o Número do seu Endereço"
            },
            bairro:{
                required: "Digite o seu Bairro",
                minlength: "O seu Bairro deve conter, no mínimo, 2 caracteres"
            },
            cidade:{
                required: "Digite a sua Cidade",
                minlength: "O sua Cidade deve conter, no mínimo, 2 caracteres"
            }, 
            estado:{
                required: "Digite o seu Estado",
                minlength: "O seu Estado deve conter 2 caracteres"
            },          
            nome:{
                required: "Digite o seu nome",
                minlength: "O seu Nome deve conter, no mínimo, 2 caracteres"
            },
            email:{
                required: "Digite o seu E-mail",
                email: "Digite um E-mail válido"
            },
            email_repete:{
                required: "Repita o E-mail",
                equalTo: "Os E-mails devem ser iguais"
            },
            cpf: {
                required: "Digite seu cpf",
                verificaCPF: "CPF inválido"
            }, 
            ddd:{
                required: "Digite o seu DDD",
                minlength: "O seu DDD deve conter 2 números"
            },
            telefone:{
                required: "Digite o seu Telefone",
                minlength: "O seu Telefone deve conter, no mínimo, 2 caracteres"
            }            
        },        
        submitHandler: function(form) {
            gravar_pagamento(form);
        }
    });
    
    /*
     * Busca CEP
     */
    $(".cep").keyup(function(e) {
        var v = $(this).val().replace('_','').replace('_','');
        if(v.length >= 8) {
            $('.loading-cep').show();
            $(".endereco").show();
            $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+v, function(){  
                if(resultadoCEP["tipo_logradouro"]){  
                    $(".endereco").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"]));  
                    $(".bairro").val(unescape(resultadoCEP["bairro"]));  
                    $(".cidade").val(unescape(resultadoCEP["cidade"]));  
                    $(".estado").val(unescape(resultadoCEP["uf"]));  
                    $(".numero").focus();
                }
                $('.loading-cep').hide();
            });
        }
    });    
                
    /*
     * Mascaras
     */
    $(".data").mask("99/99/9999");
    $(".cpf").mask("999.999.999-99");
    $(".cep").mask("99999-999");    
    $(".ddd").mask("99");
    $(".telefone").mask("99999999?9");
    $(".cartao_credito").mask("9999999999999?999");
    $(".codigo_cartao_credito").mask("999?9");
    $('.estado').keyup(function() {
        this.value = this.value.toUpperCase();       
    });  
});