<div class="curriculuns">
    <h2><?php __('Curriculuns'); ?></h2>
    <form class="filtros" method="post">
        <input type="hidden" name="data[filtrar]" value="1" />
        <ul class="filtros">             
            <li class="trecho">
                <strong>Trecho:</strong>
                <input type="text" name="data[trecho]" value="<?php echo $session->read('curriculum.trecho') ?>" />                 
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
            <th><?php echo $this->Paginator->sort('cidade'); ?></th>
            <th><?php echo $this->Paginator->sort('estado'); ?></th>
            <th><?php echo $this->Paginator->sort('objetivo'); ?></th>
            <th><?php echo $this->Paginator->sort('status'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th class="actions"><?php __('Actions'); ?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($curriculuns as $curriculum):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            ?>
            <tr<?php echo $class; ?>>
                <td><?php echo $curriculum['Curriculum']['nome']; ?>&nbsp;</td>
                <td><?php echo $curriculum['Curriculum']['email']; ?>&nbsp;</td>
                <td><?php echo $curriculum['Curriculum']['telefone']; ?>&nbsp;</td>
                <td><?php echo $curriculum['Curriculum']['celular']; ?>&nbsp;</td>
                <td><?php echo $curriculum['Curriculum']['cidade']; ?>&nbsp;</td>
                <td><?php echo $curriculum['Curriculum']['estado']; ?>&nbsp;</td>
                <td><?php echo $curriculum['Curriculum']['objetivo']; ?>&nbsp;</td>
                <td><?php echo $status[$curriculum['Curriculum']['status']]; ?>&nbsp;</td>
                <td><?php echo $formatacao->dataHora($curriculum['Curriculum']['created']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('Baixar', true), array('action' => 'download', $curriculum['Curriculum']['curriculum'])); ?>
                    <?php echo $this->Html->link(__('View', true), array('action' => 'edit', $curriculum['Curriculum']['id'])); ?>
                    <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $curriculum['Curriculum']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $curriculum['Curriculum']['id'])); ?>
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