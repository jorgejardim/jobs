<div class="comments form">
    <?php echo $this->Form->create('Comment'); ?>
    <fieldset>
        <legend><?php __('Admin Edit'); ?> <?php __('Comment'); ?></legend>
        <?php
        echo $this->Form->input('id');
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

        <li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Comment.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Comment.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List', true) . ' ' . __('Comments', true), array('action' => 'index')); ?></li>
    </ul>
</div>