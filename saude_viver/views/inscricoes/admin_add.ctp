<div class="inscricoes form">
<?php echo $this->Form->create('Inscricao');?>
	<fieldset>
		<legend><?php __('Admin Add Inscricao'); ?></legend>
	<?php
		echo $this->Form->input('id_proprio');
		echo $this->Form->input('curso_id');
		echo $this->Form->input('status');
		echo $this->Form->input('valor');
		echo $this->Form->input('tipo_pagamento');
		echo $this->Form->input('nome');
		echo $this->Form->input('email');
		echo $this->Form->input('telefone');
		echo $this->Form->input('profissao');
		echo $this->Form->input('como_soube');
		echo $this->Form->input('cep');
		echo $this->Form->input('endereco');
		echo $this->Form->input('numero');
		echo $this->Form->input('complemento');
		echo $this->Form->input('bairro');
		echo $this->Form->input('cidade');
		echo $this->Form->input('estado');
		echo $this->Form->input('url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Inscricoes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cursos', true), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>