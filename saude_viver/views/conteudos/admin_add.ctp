<div class="conteudos form">
    <?php echo $this->Form->create('Conteudo'); ?>
    <fieldset>
        <legend><?php __('Admin Add '); echo ucwords($this->Session->read('conteudo_refer')); ?></legend>
        <?php      
            echo $this->Form->input('title');
            echo $this->Form->input('text', array(
                'type'=>'textarea',
                'id'=>'ckeditor',
                'class'=>'ckeditor'
            ));  
            echo $this->Form->input('fonte');
            echo $this->Form->input('link');
            echo $this->Form->input('home', array(
                'type'=>'checkbox',
                'value'=>1,
                'hiddenField' => false
            )); 
            
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit', true)); ?>
</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Listar Conteúdos', true), array('action' => 'index', '/')); ?></li>
    </ul>
</div>