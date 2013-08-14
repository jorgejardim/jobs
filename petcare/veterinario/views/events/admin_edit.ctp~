<div class="events form">
    <?php echo $this->Form->create('Event'); ?>
    <fieldset>
        <legend><?php __('Admin Editar'); ?> <?php __('Evento'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('name');
        echo $this->Form->input('date', array('class'=>'data', 'type'=>'text'));
        echo $this->Form->input('time', array('class'=>'hora', 'label'=>'Hora', 'type'=>'text'));
        echo $this->Form->input('date_limit', array('class'=>'data', 'label'=>'Data Limite', 'type'=>'text'));
        echo $this->Form->input('place', array('type'=>'textarea', 'label'=>'Local', 'class'=>'ckeditor'));
        echo $this->Form->input('lectures', array('type'=>'textarea', 'label'=>'Palestras', 'class'=>'ckeditor'));
        echo $this->Form->input('speakers', array('type'=>'textarea', 'label'=>'Palestrantes', 'class'=>'ckeditor'));
        echo $this->Form->input('schedule', array('type'=>'textarea', 'label'=>'Cronograma', 'class'=>'ckeditor'));
        echo $this->Form->input('comments', array('type'=>'textarea', 'label'=>'Observações', 'class'=>'ckeditor'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit', true)); ?>
</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('Deletar', true), array('action' => 'delete', $this->Form->value('Event.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Event.id'))); ?></li>
        <li><?php echo $this->Html->link(__('Listar Eventos', true), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('Listar Inscrições', true), array('controller' => 'inscriptions', 'action' => 'index')); ?> </li>
    </ul>
</div>