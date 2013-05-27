<?php echo $this->Html->docType(); ?> 
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title><?php __('Saúde Viver'); ?> <?php echo $title_for_layout; ?></title>
        <?php
            echo $this->Html->meta('icon');
            echo $this->Html->css('cake.generic');
            echo $this->Html->css('admin.css');
            echo '<script type="text/javascript"> var www = \'' . $this->webroot . '\'</script>';
            echo $this->Html->script(array('jquery', 'ckeditor/ckeditor', 'ckeditor/adapters/jquery', 'admin'));            
        ?>
    </head>
    <body> 
        <div id="container">
            <div id="header">
                <div class="logo">
                    <h1></h1>
                    <h2>Painel Administrativo</h2>
                </div>
                <?php if(isset($_SESSION['Auth']['User'])){?>
                <span style ="float:right;margin-top:-22px"><?php echo $this->Html->link('Sair [x]', '/admin/users/logout', array()) ?></span>
                <?php }?>
            </div>
            <?php if(isset($_SESSION['Auth']['User'])){?>
            <div id="menu">
                <ul>
                    <li><?php echo $this->Html->link(__('Início', true), array('action' => 'home', 'controller' => 'home', '/'), array('class' => 'selecionado')); ?></li>
                    <li><?php echo $this->Html->link(__('Administradores', true), array('action' => 'index', 'controller' => 'users', '/')); ?></li>
                    <li><?php echo $this->Html->link(__('Artigos', true), array('action' => 'index', 'controller' => 'conteudos', 'artigos')); ?></li>
                    <li><?php echo $this->Html->link(__('Na Mídia', true), array('action' => 'index', 'controller' => 'midias', '/')); ?></li>
                    <li><?php echo $this->Html->link(__('Notícias', true), array('action' => 'index', 'controller' => 'conteudos', 'noticias')); ?></li>
                    <li><?php echo $this->Html->link(__('Blog', true), array('action' => 'index', 'controller' => 'conteudos', 'blog')); ?></li>
                    <li><?php echo $this->Html->link(__('Serviços', true), array('action' => 'index', 'controller' => 'conteudos', 'servicos')); ?></li>
                    <li><?php echo $this->Html->link(__('Quem Somos', true), array('action' => 'index', 'controller' => 'conteudos', 'quem_somos')); ?></li>
                    <li><?php echo $this->Html->link(__('Receitas', true), array('action' => 'index', 'controller' => 'receitas', '/')); ?></li>
                    <li><?php echo $this->Html->link(__('Parceiros', true), array('action' => 'index', 'controller' => 'conteudos', 'parceiros')); ?></li>
                    <li><?php echo $this->Html->link(__('Links', true), array('action' => 'index', 'controller' => 'conteudos', 'links')); ?></li>
                    <li><?php echo $this->Html->link(__('Cursos', true), array('action' => 'index', 'controller' => 'cursos', '/')); ?></li>
                </ul>
            </div>
            <?php }?>
            <div id="content">
                <?php echo $this->Session->flash(); ?>
                <?php echo $content_for_layout; ?>
            </div>
            <div id="footer"></div>
        </div>
        <?php
            echo $scripts_for_layout;
        ?>
    </body>
</html>
<?php echo $this->element('sql_dump'); ?>