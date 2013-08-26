<div class="groups form">
<?php echo $this->Form->create('Config');?>
	<fieldset>
		<legend><?php __('Admin Edit'); ?> <?php __('Config'); ?></legend>
	<?php
		echo $this->Form->input('convidados_limite', array('class'=>'no-upper'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>