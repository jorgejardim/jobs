<div class="contatos">
    <h2><?php __('Contatos'); ?></h2>
    <form class="filtros" method="post">
        <input type="hidden" name="data[filtrar]" value="1" />
        <ul class="filtros">             
            <li class="trecho">
                <strong>Trecho:</strong>
                <input type="text" name="data[trecho]" value="<?php echo $session->read('contato.trecho') ?>" />                 
            </li>
            <li class="enviar">
                <input type="submit" value="Ok" />              
            </li>            
        </ul>
    </form>     
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('nome'); ?></th>
            <th><?php echo $this->Paginator->sort('email'); ?></th>
            <th><?php echo $this->Paginator->sort('telefone'); ?></th>
            <th><?php echo $this->Paginator->sort('celular'); ?></th>
            <th><?php echo $this->Paginator->sort('assunto'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th class="actions"><?php __('Actions'); ?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($contatos as $contato):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            ?>
            <tr<?php echo $class; ?>>
                <td><?php echo $contato['Contato']['nome']; ?>&nbsp;</td>
                <td><a href="mailto:<?php echo $contato['Contato']['email']; ?>"><?php echo $contato['Contato']['email']; ?></a>&nbsp;</td>
                <td><?php echo $contato['Contato']['telefone']; ?>&nbsp;</td>
                <td><?php echo $contato['Contato']['celular']; ?>&nbsp;</td>
                <td><?php echo $contato['Contato']['assunto']; ?>&nbsp;</td>
                <td><?php echo $formatacao->dataHora($contato['Contato']['created']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View', true), array('action' => 'view', $contato['Contato']['id'])); ?>
                    <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $contato['Contato']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contato['Contato']['id'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br />
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
        ));
        ?>	</p>

    <div class="paging">
        <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class' => 'disabled')); ?>
        | 	<?php echo $this->Paginator->numbers(); ?>
        |
        <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled')); ?>
    </div>
</div>