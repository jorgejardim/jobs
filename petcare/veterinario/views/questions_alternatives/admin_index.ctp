<div class="questionsAlternatives index">
    <h2><?php __('Questions Alternatives');?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
                                <th><?php echo $this->Paginator->sort(__('Questionnaire Id', true), 'questionnaire_id');?></th>
                                <th><?php echo $this->Paginator->sort(__('Question Id', true), 'question_id');?></th>
                                <th><?php echo $this->Paginator->sort(__('Alternative', true), 'alternative');?></th>
                                <th><?php echo $this->Paginator->sort(__('Order', true), 'order');?></th>
                                <th><?php echo $this->Paginator->sort(__('Created', true), 'created');?></th>
                        <th class="actions"><?php __('Actions');?></th>
        </tr>
        <?php
	$i = 0;
	foreach ($questionsAlternatives as $questionsAlternative):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = 'altrow';
		}
	?>
	<tr class="up-line <?php echo $class;?>">
		<td>
			<?php echo $this->Html->link($questionsAlternative['Questionnaire']['name'], array('controller' => 'questionnaires', 'action' => 'view', $questionsAlternative['Questionnaire']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($questionsAlternative['Question']['question'], array('controller' => 'questions', 'action' => 'view', $questionsAlternative['Question']['id'])); ?>
		</td>
		<td><?php echo $questionsAlternative['QuestionsAlternative']['alternative']; ?>&nbsp;</td>
		<td><?php echo $questionsAlternative['QuestionsAlternative']['order']; ?>&nbsp;</td>
		<td class="text-center"><?php echo $formatacao->data_brasileira($questionsAlternative['QuestionsAlternative']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $questionsAlternative['QuestionsAlternative']['id']), array('class' => 'view')); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $questionsAlternative['QuestionsAlternative']['id']), array('class' => 'edit')); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $questionsAlternative['QuestionsAlternative']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $questionsAlternative['QuestionsAlternative']['id']), array('class' => 'delete')); ?>
		</td>
	</tr>
<?php endforeach; ?>
    </table>
    <br />
    <p>
        <?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>    </p>

    <div class="paging">
        	<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
        | 	<?php echo $this->Paginator->numbers();?>
 |
	<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
    </div>
</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New', true).' '.__('Questions Alternative', true), array('action' => 'add')); ?></li>
        		<li><?php echo $this->Html->link(__('List', true).' '.__('Questionnaires', true), array('controller' => 'questionnaires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New', true).' '.__('Questionnaire', true), array('controller' => 'questionnaires', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List', true).' '.__('Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New', true).' '.__('Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
    </ul>
</div>