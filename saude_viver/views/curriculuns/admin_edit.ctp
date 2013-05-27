<div class="curriculuns form">
    <?php echo $this->Form->create('Curriculum'); ?>
    <dl><?php $i = 0;
    $class = ' class="altrow"'; ?>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Nome'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $this->data['Curriculum']['nome']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Email'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<a href="mailto:<?php echo $this->data['Curriculum']['email']; ?>"><?php echo $this->data['Curriculum']['email']; ?></a>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Telefone'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $this->data['Curriculum']['telefone']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Celular'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $this->data['Curriculum']['celular']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Cidade'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $this->data['Curriculum']['cidade']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Estado'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $this->data['Curriculum']['estado']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Objetivo'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $this->data['Curriculum']['objetivo']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Curriculum'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $this->data['Curriculum']['curriculum']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Created'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $formatacao->dataHora($this->data['Curriculum']['created']); ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Modified'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $formatacao->dataHora($this->data['Curriculum']['modified']); ?>
            &nbsp;
        </dd>
    </dl>    
    <?php
    echo $this->Form->input('id');
    echo $this->Form->input('comentario');
    echo $this->Form->input('status', array(
        'type'=>'select',
        'options'=>$status, 
        'empty'=>true,
        'label'=>'Status',
    ));    
    ?>

<?php echo $this->Form->end(__('Submit', true)); ?>
</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Curriculum.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Curriculum.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Curriculuns', true), array('action' => 'index', '/')); ?></li>
    </ul>
</div>