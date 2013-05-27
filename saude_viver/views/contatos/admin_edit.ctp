<div class="contatos form">
<?php echo $this->Form->create('Contato');?>
	<fieldset>
		<legend><?php __('Admin Edit Contato'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('email');
		echo $this->Form->input('telefone');
		echo $this->Form->input('celular');
		echo $this->Form->input('assunto');
		echo $this->Form->input('mensagem');
		echo $this->Form->input('comentario');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Contato.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Contato.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contatos', true), array('action' => 'index'));?></li>
	</ul>
</div>