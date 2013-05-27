<div class="questionnaires form">
<?php echo $this->Form->create('Questionnaire');?>
	<fieldset>
		<legend><?php __('Admin Add'); ?> <?php __('Questionnaire'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List', true).' '.__('Questionnaires', true), array('action' => 'index'));?></li>
	</ul>
</div>