<div class="inscriptions index">
    <h2><?php __('Inscrições');?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
                                <th><?php echo $this->Paginator->sort(__('Evento', true), 'event_id');?></th>
                                <th><?php echo $this->Paginator->sort(__('Usuário', true), 'user_id');?></th>
                                <th><?php echo $this->Paginator->sort(__('Como soube?', true), 'how_did');?></th>
                                <th><?php echo $this->Paginator->sort(__('Data Inscrição', true), 'created');?></th>
                        <th class="actions"><?php __('Actions');?></th>
        </tr>
        <?php
	$i = 0;
	foreach ($inscriptions as $inscription):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = 'altrow';
		}
	?>
	<tr class="up-line <?php echo $class;?>">
		<td>
			<?php echo $this->Html->link($inscription['Event']['name'], array('controller' => 'events', 'action' => 'view', $inscription['Event']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($inscription['User']['name'], array('controller' => 'users', 'action' => 'view', $inscription['User']['id'])); ?>
		</td>
		<td><?php echo $inscription['Inscription']['how_did']; ?>&nbsp;</td>
		<td class="text-center"><?php echo $formatacao->data_brasileira($inscription['Inscription']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $inscription['Inscription']['id']), array('class' => 'view')); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $inscription['Inscription']['id']), array('class' => 'edit')); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $inscription['Inscription']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $inscription['Inscription']['id']), array('class' => 'delete')); ?>
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
        <li><?php echo $this->Html->link('Listar Eventos', array('controller' => 'events', 'action' => 'index')); ?> </li>
    </ul>
</div>