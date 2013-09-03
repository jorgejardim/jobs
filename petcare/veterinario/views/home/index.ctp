<div class="home">
    <div class="mensagem">
        <legend>Olá <?php echo $formatacao->formata_nome(USER_NAME); ?>!</legend>
        
        <?php if(GROUP_REFERENCE == 'usuario') { ?>
        
			<table class="ultimos-eventos" cellpadding="0" cellspacing="0">
		        <tr>
		            <th cols="2">Últimos Eventos</th>
		        </tr>
		        <?php
		        $i = 0;
		        foreach ($events as $event):
		            $class = null;
		            if ($i++ % 2 == 0) {
		                $class = 'altrow';
		            }
		            ?>
		            <tr class="up-line <?php echo $class; ?>">
		                <td><?php echo $this->Html->link($event['Event']['name'], array('action' => 'view', $event['Event']['id']), array('class' => 'view')); ?>&nbsp;</td>
		                <td class="text-center"><?php echo $formatacao->data_brasileira($event['Event']['date']); ?>&nbsp;</td>
		            </tr>
		        <?php endforeach; ?>
		    </table>        
        
        <?php } else { ?>
        
        
        
        <?php } ?>
        <center>
            <?php echo $this->Html->image('bem-vindo.jpg', array('alt' => 'Bem-vindo', 'width' => '395')); ?>
            <span style="color:#840404">AO SISTEMA</span>
        </center>                
    </div>
</div>