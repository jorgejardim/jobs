<div class="contatos form">
<?php echo $this->Form->create('Contato');?>
	<fieldset>
		<legend><?php __('Admin Add Contato'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Contatos', true), array('action' => 'index'));?></li>
	</ul>
</div>