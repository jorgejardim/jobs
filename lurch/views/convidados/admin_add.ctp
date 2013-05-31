<div class="convidados site-form">
    <h2>Evento: <?php echo $evento['Evento']['nome'] ?></h2>
    <?php echo $this->Form->create('Convidado'); ?>
    <fieldset>        
        <legend><?php __('Incluir Novo Convidado'); ?></legend>
        <?php
        echo $this->Form->input('evento_id', array('type' => 'hidden'));
        echo $this->Form->input('nome');
        echo $this->Form->input('email');
        echo $this->Form->input('celular', array('class' => 'telefone'));
        echo $this->Form->input('qtd_convidados', array('label' => 'Quantidade de Acompanhantes', 'class' => 'numeric2', 'value' => '1'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit', true)); ?>

    <hr />
    <div class="convidados site-form index">
        <legend><?php __('Convidados'); ?></legend>
        <table class="admin-table" cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo $this->Paginator->sort(__('Nome', true), 'nome'); ?></th>
                <th><?php echo $this->Paginator->sort(__('Acompanhantes', true), 'qtd_convidados'); ?></th>
                <th><?php echo $this->Paginator->sort(__('Status', true), 'status'); ?></th>
                <th class="actions"><?php __('Actions'); ?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($convidados as $convidado):
                $class = null;
                if ($i++ % 2 == 0) {
                    $class = 'altrow';
                }
                ?>
                <tr class="up-line <?php echo $class; ?>">
                    <td><?php echo $convidado['Convidado']['nome']; ?>&nbsp;</td>
                    <td class="text-center"><?php echo $convidado['Convidado']['qtd_convidados']; ?>&nbsp;</td>
                    <td class="text-center"><?php echo $status[$convidado['Convidado']['status']]; ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link($this->Html->image('icons/icon-view.png', array(
                                                    'alt' => 'Visualizar', 'title' => 'Visualizar', 'class' => 'tooltip')
                                               ), array(
                                                    'controller' => 'convidados',
                                                    'action' => 'view',
                                                    $convidado['Convidado']['id']
                                               ), array(
                                                    'escape' => false,
                                               )); ?>
                        <?php echo $this->Html->link($this->Html->image('icons/icon-edit.png', array(
                                                        'alt' => 'Editar', 'title' => 'Editar', 'class' => 'tooltip')
                                                ), array(
                                                        'controller' => 'convidados',
                                                        'action' => 'edit',
                                                        $convidado['Convidado']['id'],
                                                        $evento['Evento']['id']
                                                ), array(
                                                        'escape' => false,
                                                )); ?>
                        <?php echo $this->Html->link($this->Html->image('icons/icon-mail.png', array(
                                                        'alt' => 'Enviar Convite por E-mail', 'title' => 'Enviar Convite por E-mail', 'class' => 'tooltip')
                                                ), array(
                                                        'controller' => 'convidados',
                                                        'action' => 'email',
                                                        $convidado['Convidado']['id'],
                                                        $evento['Evento']['id']
                                                ), array(
                                                        'escape' => false,
                                                )); ?>
                        <?php echo $this->Html->link($this->Html->image('icons/icon-delete.png', array(
                                                        'alt' => 'Excluir', 'title' => 'Excluir', 'class' => 'tooltip')
                                                ), array(
                                                        'controller' => 'convidados',
                                                        'action' => 'delete',
                                                        $convidado['Convidado']['id'],
                                                        $evento['Evento']['id']
                                                ), array(
                                                        'escape' => false,
                                                        'confirm' => 'Term certeza que quer excluir?'
                                                )); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>