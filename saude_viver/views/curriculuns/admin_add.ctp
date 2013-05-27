<div class="curriculuns form">
<?php echo $this->Form->create('Curriculum');?>
	<fieldset>
		<legend><?php __('Admin Add Curriculum'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('email');
		echo $this->Form->input('telefone');
		echo $this->Form->input('celular');
		echo $this->Form->input('cidade');
		echo $this->Form->input('estado');
		echo $this->Form->input('objetivo');
		echo $this->Form->input('curriculum');
		echo $this->Form->input('comentario');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Curriculuns', true), array('action' => 'index'));?></li>
	</ul>
</div>