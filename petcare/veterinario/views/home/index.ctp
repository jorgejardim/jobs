<div class="home">
    <div class="mensagem">
        <legend>Olá <?php echo $formatacao->formata_nome(USER_NAME); ?>!</legend>
        
        <?php if(GROUP_REFERENCE == 'usuario') { ?>
        
			<table class="ultimos-eventos" cellpadding="0" cellspacing="0">
		        <tr>
		            <th class="titulo" colspan="2">Últimos Eventos</th>
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
		                <td><?php echo $this->Html->link($event['Event']['name'], array('controller' => 'events', 'action' => 'view', $event['Event']['id']), array('class' => 'view')); ?>&nbsp;</td>
		                <td class="text-center"><?php echo $formatacao->data_brasileira($event['Event']['date']); ?>&nbsp;</td>
		            </tr>
		        <?php endforeach; ?>
		        <tr>
		            <td class="ver-todos" colspan="3"><?php echo $this->Html->link('ver todos', array('controller' => 'events', 'action' => 'index'), array('class' => 'view')); ?></td>
		        </tr>
		    </table>        
        
        <?php } else { ?>
        
        	<table class="ultimos-inscritos" cellpadding="0" cellspacing="0">
		        <tr>
		            <th class="titulo" colspan="3">Últimos Inscritos</th>
		        </tr>
		        <tr>
		            <th>Evento</th>
		            <th>Veterinário</th>
		            <th>Data</th>
		        </tr>
		        <?php
		        $i = 0;
		        foreach ($inscriptions as $inscription):
		            $class = null;
		            if ($i++ % 2 == 0) {
		                $class = 'altrow';
		            }
		            ?>
		            <tr class="up-line <?php echo $class; ?>">
		                <td><?php echo $this->Html->link($inscription['Event']['name'], array('controller' => 'inscriptions', 'action' => 'view', $inscription['Inscription']['id'], 'admin' => true), array('class' => 'view')); ?>&nbsp;</td>
		                <td><?php echo $this->Html->link($inscription['User']['name'], array('controller' => 'inscriptions', 'action' => 'view', $inscription['Inscription']['id'], 'admin' => true), array('class' => 'view')); ?>&nbsp;</td>
		                <td class="text-center"><?php echo $formatacao->data_brasileira($inscription['Inscription']['created']); ?>&nbsp;</td>
		            </tr>
		        <?php endforeach; ?>
		        <tr>
		            <td class="ver-todos" colspan="3"><?php echo $this->Html->link('ver todos', array('controller' => 'inscriptions', 'action' => 'index', 'admin' => true), array('class' => 'view')); ?></td>
		        </tr>
		    </table> 
        
        <?php } ?>
                      
    </div>
</div>