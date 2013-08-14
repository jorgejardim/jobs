<div class="events view">
<h2><?php  __('Evento');?></h2>
    <dl><?php $i = 0; $class = ' class="altrow"';?>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $event['Event']['name']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $formatacao->data_brasileira($event['Event']['date']); ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hora'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo substr($event['Event']['time'],0,5); ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Limite'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $formatacao->data_brasileira($event['Event']['date_limit']); ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Local'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $event['Event']['place']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Palestras'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $event['Event']['lectures']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Palestrantes'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $event['Event']['speakers']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cronograma'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $event['Event']['schedule']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Observações'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $event['Event']['comments']; ?>
                &nbsp;
        </dd>
       
    </dl>
    
    <br /><hr /><br />
    <?php echo $this->Form->create('Inscription', array('action' => 'add'));?>
	<fieldset>
		<legend>Quero Participar (me inscrever)!</legend>
	<?php
		echo $this->Form->input('event_id', array('type'=>'hidden', 'value'=>$event['Event']['id']));
		echo $this->Form->input('how_did', array(
							  'label'=>'Como ficou sabendo do evento?',
							  'options'=>array(
							      'Internet'=>'Internet',
							      'E-mail'=>'E-mail',
							      'Clínica veterinária'=>'Clínica veterinária',
							      'Indicação de Colega'=>'Indicação de Colega',
							      'Folder'=>'Folder',
							      'USP'=>'USP',
							      'Outros'=>'Outros'
							  )));
	?>
	</fieldset>
    <?php echo $this->Form->end(__('Clique aqui para Confirmar sua presença', true));?>
    
    
    
</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Listar Eventos', true), array('action' => 'index')); ?> </li>
    </ul>
</div>