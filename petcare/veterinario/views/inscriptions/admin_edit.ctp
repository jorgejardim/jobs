<div class="inscriptions form">
<?php echo $this->Form->create('Inscription');?>
	<fieldset>
		<legend><?php __('Admin Edit'); ?> <?php __('Inscription'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('event_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('how_did');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Inscription.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Inscription.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List', true).' '.__('Inscriptions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List', true).' '.__('Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New', true).' '.__('Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List', true).' '.__('Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New', true).' '.__('User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>