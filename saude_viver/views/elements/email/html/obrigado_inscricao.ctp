Olá <?php echo $data['nome']; ?><br /><br />
Você acabou de realizar um pedido de compra do:<br /><br />
<strong><?php echo $data['razao']; ?></strong><br /><br />
Caso ainda não tenha realizado o pagamento, utilize o link 
abaixo para finalizar sua compra:<br /><br />
<a href="<?php echo $data['url']; ?>"><?php echo $data['url']; ?></a><br /><br />
Obrigado,