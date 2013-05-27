<h2 style="margin:0;padding:0;color:#666">Olá, <?php echo $name; ?>.</h2>
<br>
<div>
    <p style="line-height:20px;color:#666">Você pode ter acabado de se cadastrar. Gostariamos de solicitar que clique no link abaixo para confirmar o seu e-mail.</p>
    <p style="line-height:20px;color:#666"><a target="_blank" style="color:#F60" href="<?php echo $html->url('/c/'.$code, true); ?>"><?php echo $html->url('/c/'.$code, true); ?></a></p>
    <p style="line-height:20px;color:#666">Obrigado pela colaboração.</p>
</div>