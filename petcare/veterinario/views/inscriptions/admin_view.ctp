<div class="inscriptions view">
<h2><?php  __('Inscrição');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inscription['Inscription']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Evento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($inscription['Event']['name'], array('controller' => 'events', 'action' => 'view', $inscription['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($inscription['User']['name'], array('controller' => 'users', 'action' => 'view', $inscription['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Como soube?'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inscription['Inscription']['how_did']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formatacao->data_brasileira($inscription['Inscription']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Delete', true).' '.__('Inscrição', true), array('action' => 'delete', $inscription['Inscription']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $inscription['Inscription']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar', true).' '.__('Eventos', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
	</ul>
</div>
