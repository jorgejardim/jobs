<div class="users form">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php __('Admin Add'); ?> <?php if(GROUP_REFERENCE=='root') { __('User'); } else { echo 'Administrador'; } ?></legend>
        <?php
        if(GROUP_REFERENCE=='root') {
	    echo $this->Form->input('group_id');
        } else {
	    echo $this->Form->input('group_id', array('type'=>'hidden', 'value'=>2));
        }
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
    </ul>
</div>