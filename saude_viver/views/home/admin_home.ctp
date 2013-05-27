<div id="menu-home">
    <ul>
        <li><?php echo $this->Html->link(__('Contatos', true), array('action' => 'index', 'controller' => 'contatos', '/')); ?></li>
        <li><?php echo $this->Html->link(__('Leads', true), array('action' => 'index', 'controller' => 'leads', '/')); ?></li>
        <li><?php echo $this->Html->link(__('Inscrições', true), array('action' => 'index', 'controller' => 'inscricoes', '/')); ?></li>
        <li><?php echo $this->Html->link(__('Curriculuns', true), array('action' => 'index', 'controller' => 'curriculuns', 'artigos')); ?></li>        
    </ul>
</div>