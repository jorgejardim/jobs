<div class="comments form">
    <?php echo $this->Form->create('Comment'); ?>
    <fieldset>
        <legend><?php __('Admin Add'); ?> <?php __('Comment'); ?></legend>
        <?php
        echo $this->Form->input('name');
        echo $this->Form->input('email');
        echo $this->Form->input('comment', array('label' => 'Comentário'));
        echo $this->Form->input('status', array('label' => 'Liberado'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit', true)); ?>
</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List', true) . ' ' . __('Comments', true), array('action' => 'index')); ?></li>
    </ul>
</div>