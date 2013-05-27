<div class="questions form">
<?php echo $this->Form->create('Question');?>
	<fieldset>
		<legend><?php __('Admin Add'); ?> <?php __('Question'); ?></legend>
	<?php
		echo $this->Form->input('questionnaire_id');
		echo $this->Form->input('question');
		echo $this->Form->input('order');
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List', true).' '.__('Questions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List', true).' '.__('Questionnaires', true), array('controller' => 'questionnaires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New', true).' '.__('Questionnaire', true), array('controller' => 'questionnaires', 'action' => 'add')); ?> </li>
	</ul>
</div>