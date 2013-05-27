$(document).ready(function() {
            
        /*
         * Mascaras
         */
        $(".telefone").mask("(99)9999-9999");
        $(".cpf").mask("999.999.999-99");
        $(".cep").mask("99999-999");
        $(".estado").mask("aa");
        $(".numeric").mask("9?9999999999999");
        $(".numeric1").mask("9");
        $(".numeric2").mask("9?9");
        $(".numeric3").mask("9?99");        
        $(".moeda").priceFormat({thousandsSeparator:'', centsSeparator:'.', prefix: ''});
        $(".maskhora").mask("99:99");
            
        /*
         * TR Mouse Over
         */
        $('.up-line').mouseover(function() {
                $(this).addClass('up-line-cor');
        });
        $('.up-line').mouseout(function() {
                $(this).removeClass('up-line-cor');
        });  

        /*
         * Validacao 
         */    
        jQuery.extend(jQuery.validator.messages, {
            required: "Este campo é obrigatório."
        }); 
        
        /*
         * DatePicker
         */    
//        $( "input.data" ).datepicker({dateFormat: 'dd/mm/yy'});
//        $( "input.datatime" ).datetimepicker({ 
//            dateFormat: 'dd/mm/yy',
//            addSliderAccess: true,
//            sliderAccessArgs: {touchonly: false}});          
//        $('input.hora').timepicker({
//                addSliderAccess: true,
//                sliderAccessArgs: {touchonly: false}, 
//                hourMin: 0,
//                hourMax: 23});                    
        
        /*
         * CEP
         */          
        $(".cep").keyup(function(e) {
            var v = $(this).val().replace('_','').replace('_','');
            if(v.length >= 8) {
                $('.loading-cep').show();
                $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$(".cep").val(), function(){  
                    if(resultadoCEP["tipo_logradouro"]){  
                        $(".endereco").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"]));  
                        $(".bairro").val(unescape(resultadoCEP["bairro"]));  
                        $(".cidade").val(unescape(resultadoCEP["cidade"]));  
                        $(".estado").val(unescape(resultadoCEP["uf"]));
                    }
                    $('.loading-cep').hide();
                });
            }
        });  
        
        /*
         * Modal
         */         
        $( "#flashMessage" ).dialog( "destroy" );
        $( "#flashMessage" ).dialog({
            modal: true,
            title: "Saúde Viver - Aviso",
            width: 520,
            buttons: {
                Ok: function() {
                    $( this ).dialog( "close" );
                }
            }
        });        
});