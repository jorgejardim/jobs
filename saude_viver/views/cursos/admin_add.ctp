<div class="cursos form">
<?php echo $this->Form->create('Curso');?>
	<fieldset>
		<legend><?php __('Admin Add Curso'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('data');
                echo $this->Form->input('data_final');
		echo $this->Form->input('publico');
		echo $this->Form->input('conteudo');
		echo $this->Form->input('palestrantes');
		echo $this->Form->input('valor_normal');
		echo $this->Form->input('valor_estudantes');
		echo $this->Form->input('incluso');
		echo $this->Form->input('local');
		echo $this->Form->input('contato');
		echo $this->Form->input('obs');
		echo $this->Form->input('cancelamento');
                echo $this->Form->input('curso_online');
                echo $this->Form->input('material_de_apoio');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cursos', true), array('action' => 'index'));?></li>
	</ul>
</div>