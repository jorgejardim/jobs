<?php
    Router::connect('/', array('controller' => 'pages', 'action' => 'home'));
    Router::connect('/admin', array('controller' => 'home', 'action' => 'home', 'admin'=> true));  
    Router::connect('/cursos', array('controller' => 'cursos', 'action' => 'index'));
    Router::connect('/cursos/aguarde', array('controller' => 'cursos', 'action' => 'index', 'aguarde' => '1'));
    Router::connect('/cursos/:reference', array('controller' => 'cursos', 'action' => 'index', 'reference' => '[0-9a-zA-Z_-]'));
    Router::connect('/cursos/:inscricao/:reference', array('controller' => 'cursos', 'action' => 'index', 'inscricao' => '[0-9a-zA-Z_-]', 'reference' => '[0-9a-zA-Z_-]'));
    Router::connect('/na-midia', array('controller' => 'pages', 'action' => 'midias'));
    Router::connect('/na-midia/:reference', array('controller' => 'pages', 'action' => 'midias', 'reference' => '[0-9a-zA-Z_-]'));    
    Router::connect('/contato', array('controller' => 'contato', 'action' => 'index'));
    Router::connect('/trabalhe-conosco', array('controller' => 'trabalhe_conosco', 'action' => 'index'));
    Router::connect('/blog', array('controller' => 'blog', 'action' => 'index'));
    Router::connect('/blog/:reference', array('controller' => 'blog', 'action' => 'index', 'reference' => '[0-9a-zA-Z_-]'));
    Router::connect('/:pagina', array('controller' => 'pages', 'action' => 'display', 'pagina' => '[0-9a-zA-Z_-]'));
    Router::connect('/:pagina/:reference', array('controller' => 'pages', 'action' => 'display', 'pagina' => '[0-9a-zA-Z_-]', 'reference' => '[0-9a-zA-Z_-]'));