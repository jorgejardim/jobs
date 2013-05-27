<div class="questionsAlternatives form">
<?php echo $this->Form->create('QuestionsAlternative');?>
	<fieldset>
		<legend><?php __('Admin Edit'); ?> <?php __('Questions Alternative'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('questionnaire_id');
		echo $this->Form->input('question_id');
		echo $this->Form->input('alternative');
		echo $this->Form->input('order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('QuestionsAlternative.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('QuestionsAlternative.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List', true).' '.__('Questions Alternatives', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List', true).' '.__('Questionnaires', true), array('controller' => 'questionnaires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New', true).' '.__('Questionnaire', true), array('controller' => 'questionnaires', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List', true).' '.__('Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New', true).' '.__('Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>