<div class="conteudos index">
    <h2><?php echo ucwords($this->Session->read('conteudo_refer')); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('title'); ?></th>
            <th><?php echo $this->Paginator->sort('refer'); ?></th>
            <th class="actions"><?php __('Actions'); ?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($conteudos as $conteudo):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            ?>
            <tr<?php echo $class; ?>>
                <td><?php echo $conteudo['Conteudo']['id']; ?>&nbsp;</td>
                <td><?php echo $conteudo['Conteudo']['title']; ?>&nbsp;</td>
                <td><?php echo $conteudo['Conteudo']['refer']; ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View', true), array('controller' => $conteudo['Conteudo']['refer'],'action' => $conteudo['Conteudo']['url'], 'admin' => false)); ?>
                    <?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $conteudo['Conteudo']['id'])); ?>
                    <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $conteudo['Conteudo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $conteudo['Conteudo']['id'])); ?>
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
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Novo Conteúdo', true), array('action' => 'add', '/')); ?></li>
        <?php if($this->params['pass'][0]=='noticias') { ?>
        <li><?php echo $this->Html->link(__('Buscar Notícias', true), array('action' => 'buscar_noticias')); ?></li>
        <?php } ?>
    </ul>
</div>