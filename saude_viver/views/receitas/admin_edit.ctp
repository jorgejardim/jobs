<div class="receitas form">
<?php echo $this->Form->create('Receita');?>
	<fieldset>
		<legend><?php __('Admin Edit Receita'); ?></legend>
	<?php
            echo $this->Form->input('id');
            echo $this->Form->input('categoria', array(
                'type'=>'select',
                'label'=>'Class Type:',
                'options' => $categorias
            ));   
            echo $this->Form->input('titulo');
            echo $this->Form->input('rendimento');
            echo $this->Form->input('ingredientes');
            echo $this->Form->input('preparo');
            echo $this->Form->input('home', array(
                'type'=>'checkbox',
                'value'=>1,
                'hiddenField' => false
            ));                 
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Receita.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Receita.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Receitas', true), array('action' => 'index'));?></li>
	</ul>
</div>