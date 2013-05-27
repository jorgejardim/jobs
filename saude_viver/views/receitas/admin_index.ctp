<div class="receitas index">
	<h2><?php __('Receitas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('titulo');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($receitas as $receita):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $receita['Receita']['id']; ?>&nbsp;</td>
		<td><?php echo $receita['Receita']['titulo']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $receita['Receita']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $receita['Receita']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $receita['Receita']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $receita['Receita']['id'])); ?>
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
	?>	</p>

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
		<li><?php echo $this->Html->link(__('New Receita', true), array('action' => 'add')); ?></li>
	</ul>
</div>