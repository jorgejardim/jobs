<?php require('inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" lang="pt-BR" dir="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Redirecionando...</title>
        <link rel="stylesheet" href="<?php echo HTML; ?>css/global.css" type="text/css" media="screen" />
        <style>
            .logo {
                background-color: #000000;
                margin-bottom: 40px;
                margin-top: 10px;
                padding: 10px;
                text-align: center;
            }
        </style>
    </head>
    <body style="font-family:arial">
        <form action="https://pagseguro.uol.com.br/v2/checkout/payment.html" target="_top" accept-charset="utf-8" method="post">            
            <input type="hidden" name="itemDescription1" value="<?php echo @!$razao?'Nivel A Qualidade':$razao; ?>" />
            <input type="hidden" name="itemQuantity1" value="1" />
            <input type="hidden" name="tipo" value="CP" />
            <input type="hidden" name="receiverEmail" value="angelinaaw@gmail.com" />
            <input type="hidden" name="itemId1" value="1" />
            <input type="hidden" name="shippingAddressCountry" value="BRA" />
            <input type="hidden" name="currency" value="BRL" />
            <input type="hidden" name="itemAmount1" value="<?php echo @str_replace(',', '.', $produto_valor); ?>" />
            <input type="hidden" name="reference" value="<?php echo @$id_proprio; ?>" />
            <input type="hidden" name="senderName" value="<?php echo @$_POST['nome']; ?>" />
            <input type="hidden" name="senderEmail" value="<?php echo @$_POST['email']; ?>" />
            <input type="hidden" name="senderAreaCode" value="<?php echo @$_POST['ddd']; ?>" />
            <input type="hidden" name="senderPhone" value="<?php echo @$_POST['telefone']; ?>" />
            <input type="hidden" name="shippingAddressPostalCode" value="<?php echo @$_POST['cep']; ?>" />
            <input type="hidden" name="shippingAddressStreet" value="<?php echo @$_POST['endereco']; ?>" />
            <input type="hidden" name="shippingAddressNumber" value="<?php echo @$_POST['numero']; ?>" />
            <input type="hidden" name="shippingAddressComplement" value="<?php echo @$_POST['complemento']; ?>" />
            <input type="hidden" name="shippingAddressDistrict" value="<?php echo @$_POST['bairro']; ?>" />
            <input type="hidden" name="shippingAddressCity" value="<?php echo @$_POST['cidade']; ?>" />
            <input type="hidden" name="shippingAddressState" value="<?php echo @$_POST['estado']; ?>" />                
        </form>

        <div class="logo"> 
            <img src="<?php echo $www; ?>img/logo-site.png" />
        </div>
        <div style="font-size: large; text-align: center;"> 
            Você vai ser direcionado ao <b>Sistema de Pagamento</b> para efetuar o pagamento 
        </div>
        <div style="font-size: large; text-align: center;"> 
            <br/>
            <font size="18" color="#f00">em <span id="counter"></span> segundos. </font>
            <br/>
            <button onclick="javascript:document.forms[0].submit();" style="margin: 15px; border: 1px dotted #1C293B; background-color: #8FA449; color: #FFF; padding: 10px; border-radius: 20px;"> 
                Clique aqui se a pagina não redirecionar automaticamente! 
            </button>
        </div>

        <script type="text/javascript">
            var cntr = 5;         
            function tick() {             
                document.getElementById("counter").innerHTML = cntr--;             
                if (cntr > 0) {                 
                    setTimeout(tick, 1000);             
                } else {                 
                    document.forms[0].submit();            
                }         
            }
            //$(document).ready(function() {
            tick();     
            //});
        </script>
    </body>
</html>
<?php 
//echo '<pre>';
//print_r($_POST);
?>