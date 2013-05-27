<div class="midias form">
<?php echo $this->Form->create('Midia');?>
	<fieldset>
		<legend><?php __('Admin Add Mídia'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Mídias', true), array('action' => 'index'));?></li>
	</ul>
</div>