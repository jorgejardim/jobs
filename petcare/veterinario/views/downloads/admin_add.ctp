<div class="downloads form">
    <?php echo $this->Form->create('Download', array('type' => 'file')); ?>
    <fieldset>
        <legend><?php __('Admin Add'); ?> <?php __('Download'); ?></legend>
        <?php
        echo $this->Form->input('name');
        echo $this->Form->input('observation', array('label'=>'Observação'));
        echo $this->Form->input('Download.arquivo', array('label'=>'Arquivo', 'type'=>'file'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit', true)); ?>
</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List', true) . ' ' . __('Downloads', true), array('action' => 'index')); ?></li>
    </ul>
</div>