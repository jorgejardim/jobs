<div class="events view">
<h2><?php  __('Evento');?></h2>
    <dl><?php $i = 0; $class = ' class="altrow"';?>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $event['Event']['name']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $formatacao->data_brasileira($event['Event']['date']); ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hora'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo substr($event['Event']['time'],0,5); ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Limite'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $formatacao->data_brasileira($event['Event']['date_limit']); ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Local'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $event['Event']['place']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Palestras'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $event['Event']['lectures']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Palestrantes'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $event['Event']['speakers']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cronograma'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $event['Event']['schedule']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Observações'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $event['Event']['comments']; ?>
                &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $event['Event']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('Deletar', true), array('action' => 'delete', $event['Event']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $event['Event']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('Listar Eventos', true), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Novo Evento', true), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Listar Inscrições', true), array('controller' => 'inscriptions', 'action' => 'index')); ?> </li>
    </ul>
</div>