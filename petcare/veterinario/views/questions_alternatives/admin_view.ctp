<div class="questionsAlternatives view">
<h2><?php  __('Questions Alternative');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $questionsAlternative['QuestionsAlternative']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Questionnaire'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($questionsAlternative['Questionnaire']['name'], array('controller' => 'questionnaires', 'action' => 'view', $questionsAlternative['Questionnaire']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Question'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($questionsAlternative['Question']['question'], array('controller' => 'questions', 'action' => 'view', $questionsAlternative['Question']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alternative'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $questionsAlternative['QuestionsAlternative']['alternative']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Order'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $questionsAlternative['QuestionsAlternative']['order']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formatacao->data_brasileira($questionsAlternative['QuestionsAlternative']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit', true).' '.__('Questions Alternative', true), array('action' => 'edit', $questionsAlternative['QuestionsAlternative']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete', true).' '.__('Questions Alternative', true), array('action' => 'delete', $questionsAlternative['QuestionsAlternative']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $questionsAlternative['QuestionsAlternative']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List', true).' '.__('Questions Alternatives', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New', true).' '.__('Questions Alternative', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List', true).' '.__('Questionnaires', true), array('controller' => 'questionnaires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New', true).' '.__('Questionnaire', true), array('controller' => 'questionnaires', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List', true).' '.__('Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New', true).' '.__('Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
