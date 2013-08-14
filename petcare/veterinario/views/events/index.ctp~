<div class="events index">
    <h2><?php __('Eventos'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort(__('Nome', true), 'name'); ?></th>
            <th><?php echo $this->Paginator->sort(__('Data', true), 'date'); ?></th>
            <th><?php echo $this->Paginator->sort(__('Hora', true), 'time'); ?></th>
            <th class="actions"><?php __('Actions'); ?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($events as $event):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = 'altrow';
            }
            ?>
            <tr class="up-line <?php echo $class; ?>">
                <td><?php echo $event['Event']['name']; ?>&nbsp;</td>
                <td class="text-center"><?php echo $formatacao->data_brasileira($event['Event']['date']); ?>&nbsp;</td>
                <td class="text-center"><?php echo substr($event['Event']['time'],0,5); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View', true), array('action' => 'view', $event['Event']['id']), array('class' => 'view')); ?>
                    <?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $event['Event']['id']), array('class' => 'edit')); ?>
                    <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $event['Event']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $event['Event']['id']), array('class' => 'delete')); ?>
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
        <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class' => 'disabled')); ?>
        | 	<?php echo $this->Paginator->numbers(); ?>
        |
        <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled')); ?>
    </div>
</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Novo Evento', true), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('Listar Inscrições', true), array('controller' => 'inscriptions', 'action' => 'index')); ?> </li>
    </ul>
</div>