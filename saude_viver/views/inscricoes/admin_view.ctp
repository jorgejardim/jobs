<div class="inscricoes view">
    <h2><?php __('Inscricao'); ?></h2>
    <dl><?php $i = 0;
$class = ' class="altrow"'; ?>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Id'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $inscricao['Inscricao']['id']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Id Proprio'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $inscricao['Inscricao']['id_proprio']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Curso'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $inscricao['Curso']['titulo']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Status'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $inscricao['Inscricao']['status']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Valor'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>R$ 
<?php echo $inscricao['Inscricao']['valor']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Tipo Pagamento'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $inscricao['Inscricao']['tipo_pagamento']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Nome'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $inscricao['Inscricao']['nome']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Email'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $inscricao['Inscricao']['email']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Telefone'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $inscricao['Inscricao']['telefone']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Profissao'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $inscricao['Inscricao']['profissao']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Como Soube'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $inscricao['Inscricao']['como_soube']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Cep'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $inscricao['Inscricao']['cep']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Endereco'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $inscricao['Inscricao']['endereco']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Numero'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $inscricao['Inscricao']['numero']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Complemento'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $inscricao['Inscricao']['complemento']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Bairro'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $inscricao['Inscricao']['bairro']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Cidade'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $inscricao['Inscricao']['cidade']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Estado'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $inscricao['Inscricao']['estado']; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Pagamento'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
            <a href="<?php echo $inscricao['Inscricao']['url']; ?>">
link</a>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Created'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $formatacao->dataHora($inscricao['Inscricao']['created']); ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class; ?>><?php __('Modified'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class; ?>>
<?php echo $formatacao->dataHora($inscricao['Inscricao']['modified']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('List Inscricoes', true), array('action' => 'index', '/')); ?> </li>
    </ul>
</div>
