<div class="questionnaires view">
<h2><?php  __('Questionnaire');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $questionnaire['Questionnaire']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $questionnaire['Questionnaire']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $questionnaire['Questionnaire']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formatacao->data_brasileira($questionnaire['Questionnaire']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit', true).' '.__('Questionnaire', true), array('action' => 'edit', $questionnaire['Questionnaire']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete', true).' '.__('Questionnaire', true), array('action' => 'delete', $questionnaire['Questionnaire']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $questionnaire['Questionnaire']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List', true).' '.__('Questionnaires', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New', true).' '.__('Questionnaire', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
