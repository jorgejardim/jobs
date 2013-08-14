<div class="comments">
    <?php echo $this->Form->create('Comment'); ?>
    <fieldset>
        <legend><?php __('Admin Add'); ?> <?php __('Comentário'); ?></legend>
        <?php
        echo $this->Form->input('comment', array('label'=>'Comentário'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit', true)); ?>
</div>