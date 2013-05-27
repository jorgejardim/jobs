<div class="comments form">
    <?php echo $this->Form->create('Comment'); ?>
    <fieldset>
        <legend><?php __('Admin Add'); ?> <?php __('Comentário'); ?></legend>
        <?php
        echo $this->Form->input('comment', array('label'=>'Comentário'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit', true)); ?>
</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('Listar Comentarios', true), array('action' => 'index')); ?></li>
    </ul>
</div>