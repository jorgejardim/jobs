<div class="comments index">
    <h2><?php __('Comments'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort(__('Name', true), 'name'); ?></th>
            <th><?php echo $this->Paginator->sort(__('Email', true), 'email'); ?></th>
            <th><?php echo $this->Paginator->sort(__('Liberado', true), 'status'); ?></th>
            <th><?php echo $this->Paginator->sort(__('Created', true), 'created'); ?></th>
            <th class="actions"><?php __('Actions'); ?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($comments as $comment):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = 'altrow';
            }
            ?>
            <tr class="up-line <?php echo $class; ?>">
                <td><?php echo $comment['Comment']['name']; ?>&nbsp;</td>
                <td><?php echo $comment['Comment']['email']; ?>&nbsp;</td>
                <td class="text-center"><?php echo $comment['Comment']['status']?'Sim':'Não'; ?>&nbsp;</td>
                <td class="text-center"><?php echo $formatacao->data_brasileira($comment['Comment']['created']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View', true), array('action' => 'view', $comment['Comment']['id']), array('class' => 'view')); ?>
                    <?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $comment['Comment']['id']), array('class' => 'edit')); ?>
                    <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $comment['Comment']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $comment['Comment']['id']), array('class' => 'delete')); ?>
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
        <li><?php echo $this->Html->link(__('New', true) . ' ' . __('Comment', true), array('action' => 'add')); ?></li>
    </ul>
</div>