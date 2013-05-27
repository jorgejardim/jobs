<div class="inscricoes">
    <h2><?php __('Inscricoes'); ?></h2>
    <form class="filtros" method="post">
        <input type="hidden" name="data[filtrar]" value="1" />
        <ul class="filtros">             
            <li class="trecho">
                <strong>Trecho:</strong>
                <input type="text" name="data[trecho]" value="<?php echo $session->read('inscricao.trecho') ?>" />                 
            </li>
            <li class="status-cv">
                <strong>Status:</strong>
                <?php
                echo $this->Form->input('status', array(
                    'type'=>'select',
                    'options'=>$status, 
                    'empty'=>true,
                    'label'=>false,
                    'div'=>false
                ));    
                ?>                
            </li>             
            <li class="cursos">
                <strong>Curso:</strong>
                <?php
                echo $this->Form->input('curso', array(
                    'type'=>'select',
                    'options'=>$cursos, 
                    'empty'=>true,
                    'label'=>false,
                    'div'=>false
                ));    
                ?>                
            </li>            
            <li class="enviar">
                <input type="submit" value="Ok" />              
            </li>            
        </ul>
    </form>      
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('curso_id'); ?></th>
            <th><?php echo $this->Paginator->sort('status'); ?></th>
            <th><?php echo $this->Paginator->sort('nome'); ?></th>
            <th><?php echo $this->Paginator->sort('email'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th class="actions"><?php __('Actions'); ?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($inscricoes as $inscricao):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            ?>
            <tr<?php echo $class; ?>>
                <td><?php echo $inscricao['Curso']['titulo']; ?>  </td>
                <td><?php echo $status[$inscricao['Inscricao']['status']]; ?>&nbsp;</td>
                <td><?php echo $inscricao['Inscricao']['nome']; ?>&nbsp;</td>
                <td><?php echo $inscricao['Inscricao']['email']; ?>&nbsp;</td>
                <td><?php echo $formatacao->dataHora($inscricao['Inscricao']['created']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View', true), array('action' => 'view', $inscricao['Inscricao']['id'])); ?>
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