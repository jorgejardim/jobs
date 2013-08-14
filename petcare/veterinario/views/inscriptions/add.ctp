<div class="inscriptions form">
<?php echo $this->Form->create('Inscription');?>
	<fieldset>
		<legend>Add Inscrição: <?php echo $event['Event']['name']?></legend>
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
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List', true).' '.__('Inscriptions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List', true).' '.__('Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New', true).' '.__('Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List', true).' '.__('Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New', true).' '.__('User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>