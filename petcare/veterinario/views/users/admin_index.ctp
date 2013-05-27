<div class="users index">
    <h2><?php __('Users'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort(__('Group Id', true), 'group_id'); ?></th>
            <th><?php echo $this->Paginator->sort(__('Name', true), 'name'); ?></th>
            <th><?php echo $this->Paginator->sort(__('Email', true), 'email'); ?></th>
            <th><?php echo $this->Paginator->sort(__('Created', true), 'created'); ?></th>
            <th><?php echo $this->Paginator->sort(__('Active', true), 'active'); ?></th>
            <th class="actions"><?php __('Actions'); ?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($users as $user):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = 'altrow';
            }
            ?>
            <tr class="up-line <?php echo $class; ?>">
                <td>
                    <?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
                </td>
                <td><?php echo $user['User']['name']; ?>&nbsp;</td>
                <td><?php echo $user['User']['email']; ?>&nbsp;</td>
                <td class="text-center"><?php echo $formatacao->data_brasileira($user['User']['created']); ?>&nbsp;</td>
                <td><?php echo $user['User']['active']; ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View', true), array('action' => 'view', $user['User']['id']), array('class' => 'view')); ?>
                    <?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $user['User']['id']), array('class' => 'edit')); ?>
                    <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id']), array('class' => 'delete')); ?>
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
        <li><?php echo $this->Html->link(__('New', true) . ' ' . __('User', true), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List', true) . ' ' . __('Groups', true), array('controller' => 'groups', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New', true) . ' ' . __('Group', true), array('controller' => 'groups', 'action' => 'add')); ?> </li>
    </ul>
</div>