<div class="leads form">
<?php echo $this->Form->create('Lead');?>
	<fieldset>
		<legend><?php __('Admin Add Lead'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('telefone');
		echo $this->Form->input('email');
		echo $this->Form->input('interesse');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Leads', true), array('action' => 'index'));?></li>
	</ul>
</div>