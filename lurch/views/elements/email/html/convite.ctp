<h2 style="margin:0;padding:0;color:#666">Olá, <?php echo $convidado['nome']; ?>.</h2>
<br>
<div>
    <p style="line-height:20px;color:#666"></p>
    <p style="line-height:20px;color:#666"><a target="_blank" style="color:#F60" href="<?php echo $html->url('/convidados/confirmar/'.$id, true); ?>"><?php echo $html->url('/convidados/confirmar/'.$id, true); ?></a></p>
    <p style="line-height:20px;color:#666"></p>
</div>