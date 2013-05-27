<div class="midias index">
	<h2><?php __('Midias');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('titulo');?></th>
                        <th><?php echo $this->Paginator->sort('fonte');?></th>
                        <th><?php echo $this->Paginator->sort('home');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($midias as $midia):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $midia['Midia']['id']; ?>&nbsp;</td>
		<td><?php echo $midia['Midia']['titulo']; ?>&nbsp;</td>
                <td><?php echo $midia['Midia']['fonte']; ?>&nbsp;</td>
                <td><?php echo $midia['Midia']['home']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $midia['Midia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $midia['Midia']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $midia['Midia']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $midia['Midia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Midia', true), array('action' => 'add')); ?></li>
	</ul>
</div>