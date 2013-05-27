<div class="conteudos view">
<h2><?php echo ucwords($this->Session->read('conteudo_refer')); ?></h2>
    <dl><?php $i = 0; $class = ' class="altrow"';?>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $conteudo['Conteudo']['id']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Url'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $conteudo['Conteudo']['url']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $conteudo['Conteudo']['title']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Text'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $conteudo['Conteudo']['text']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Refer'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $conteudo['Conteudo']['refer']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $conteudo['Conteudo']['created']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $conteudo['Conteudo']['modified']; ?>
                &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Editar Conteúdo', true), array('action' => 'edit', $conteudo['Conteudo']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('Deletar Conteúdo', true), array('action' => 'delete', $conteudo['Conteudo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $conteudo['Conteudo']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('Listar Conteúdos', true), array('action' => 'index', '/')); ?> </li>
        <li><?php echo $this->Html->link(__('Novo Conteúdo', true), array('action' => 'add', '/')); ?> </li>
    </ul>
</div>
