<div class="convidados site-form">
    <h2>Evento: <?php echo $evento['Evento']['nome'] ?></h2>
    <?php echo $this->Form->create('Convidado', array('type' => 'file')); ?>
    <fieldset>        
        <legend><?php __('Importar Convidados'); ?></legend>
        <?php
        echo $this->Form->input('evento_id', array('type' => 'hidden'));
        echo $this->Form->input('arquivo', array('type'=>'file'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit', true)); ?>
</div>