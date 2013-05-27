<div class="downloads index">
    <h2><?php __('Downloads'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort(__('Name', true), 'name'); ?></th>
            <th><?php echo $this->Paginator->sort(__('Observação', true), 'observation'); ?></th>
            <th><?php echo $this->Paginator->sort(__('Created', true), 'created'); ?></th>
            <th class="actions"><?php __('Actions'); ?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($downloads as $download):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = 'altrow';
            }
            ?>
            <tr class="up-line <?php echo $class; ?>">
                <td><?php echo $download['Download']['name']; ?>&nbsp;</td>
                <td><?php echo nl2br($download['Download']['observation']); ?>&nbsp;</td>
                <td class="text-center"><?php echo $formatacao->data_brasileira($download['Download']['created']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $download['Download']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $download['Download']['id']), array('class' => 'delete')); ?>
                    <?php echo $this->Html->link(__('Baixar', true), '/downloads/'.$download['Download']['file']); ?>
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
        <li><?php echo $this->Html->link(__('Novo Arquivo de Download', true), array('action' => 'add')); ?></li>
    </ul>
</div>