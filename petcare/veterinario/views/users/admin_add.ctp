<div class="users form">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php __('Admin Add'); ?> <?php __('User'); ?></legend>
        <?php
        echo $this->Form->input('group_id');
        echo $this->Form->input('name');
        echo $this->Form->input('email');
        echo $this->Form->input('password');        
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit', true)); ?>
</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List', true) . ' ' . __('Users', true), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List', true) . ' ' . __('Groups', true), array('controller' => 'groups', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New', true) . ' ' . __('Group', true), array('controller' => 'groups', 'action' => 'add')); ?> </li>
    </ul>
</div>