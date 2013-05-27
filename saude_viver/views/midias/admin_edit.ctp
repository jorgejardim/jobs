<div class="midias form">
<?php echo $this->Form->create('Midia');?>
	<fieldset>
		<legend><?php __('Admin Edit Mídia'); ?></legend>
	<?php
            echo $this->Form->input('id');
            echo $this->Form->input('titulo');
            echo $this->Form->input('conteudo', array(
                'type'=>'textarea',
                'id'=>'ckeditor',
                'class'=>'ckeditor'
            ));             
            echo $this->Form->input('fonte');
            echo $this->Form->input('link');
            echo $this->Form->input('logo');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Mídia.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Mídia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mídias', true), array('action' => 'index'));?></li>
	</ul>
</div>