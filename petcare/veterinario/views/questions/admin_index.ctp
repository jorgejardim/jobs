<div class="questions index">
    <h2><?php __('Questions');?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
                                <th><?php echo $this->Paginator->sort(__('Questionnaire Id', true), 'questionnaire_id');?></th>
                                <th><?php echo $this->Paginator->sort(__('Question', true), 'question');?></th>
                                <th><?php echo $this->Paginator->sort(__('Order', true), 'order');?></th>
                                <th><?php echo $this->Paginator->sort(__('Type', true), 'type');?></th>
                                <th><?php echo $this->Paginator->sort(__('Created', true), 'created');?></th>
                        <th class="actions"><?php __('Actions');?></th>
        </tr>
        <?php
	$i = 0;
	foreach ($questions as $question):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = 'altrow';
		}
	?>
	<tr class="up-line <?php echo $class;?>">
		<td>
			<?php echo $this->Html->link($question['Questionnaire']['name'], array('controller' => 'questionnaires', 'action' => 'view', $question['Questionnaire']['id'])); ?>
		</td>
		<td><?php echo $question['Question']['question']; ?>&nbsp;</td>
		<td><?php echo $question['Question']['order']; ?>&nbsp;</td>
		<td><?php echo $question['Question']['type']; ?>&nbsp;</td>
		<td class="text-center"><?php echo $formatacao->data_brasileira($question['Question']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $question['Question']['id']), array('class' => 'view')); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $question['Question']['id']), array('class' => 'edit')); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $question['Question']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $question['Question']['id']), array('class' => 'delete')); ?>
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
        <li><?php echo $this->Html->link(__('New', true).' '.__('Question', true), array('action' => 'add')); ?></li>
        		<li><?php echo $this->Html->link(__('List', true).' '.__('Questionnaires', true), array('controller' => 'questionnaires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New', true).' '.__('Questionnaire', true), array('controller' => 'questionnaires', 'action' => 'add')); ?> </li>
    </ul>
</div>