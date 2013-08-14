<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?>:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Group'); ?>:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['Group']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?>:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?>:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?>:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('CRMV'); ?>:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['UsersData']['crmv']; ?>
			&nbsp;
		</dd>	
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Clínica'); ?>:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['UsersData']['clinica']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aniversário'); ?>:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['UsersData']['birth']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Telefone'); ?>:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo @$user['UsersPhone']['number']['R']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Celular'); ?>:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo @$user['UsersPhone']['number']['C']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Endereço'); ?>:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo @$user['UsersAddress']['address'].', '.@$user['UsersAddress']['number']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Complemento'); ?>:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo @$user['UsersAddress']['complement']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bairro'); ?>:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo @$user['UsersAddress']['neighborhood']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('CEP'); ?>:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo @$user['UsersAddress']['zipcode']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cidade'); ?>:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo @$user['UsersAddress']['city'].' - '.@$user['UsersAddress']['state']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aceita SMS'); ?>:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['UsersData']['accept_sms']?'Sim':'Não'; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Aceita E-mails'); ?>:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['UsersData']['accept_email']?'Sim':'Não'; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?>:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formatacao->data_brasileira($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?>:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formatacao->data_brasileira($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Active'); ?>:</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['active']; ?>
			&nbsp;
		</dd>				
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit', true).' '.__('User', true), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete', true).' '.__('User', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List', true).' '.__('Users', true), array('action' => 'index')); ?> </li>
	</ul>
</div>
