<div class="downloads form">
<?php echo $this->Form->create('Download');?>
	<fieldset>
		<legend><?php __('Admin Edit'); ?> <?php __('Download'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('observation');
		echo $this->Form->input('file');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Download.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Download.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List', true).' '.__('Downloads', true), array('action' => 'index'));?></li>
	</ul>
</div>