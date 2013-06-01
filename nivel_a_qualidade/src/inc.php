<?php
/*
 * Variaveis Iniciais
 */
if (($_SERVER['HTTP_HOST'] == 'localhost')) {

    $host       = 'http://' . $_SERVER['HTTP_HOST'];
    $backoffice = "/backoffice";
    $webroot    = "/jobs/nivel_a_qualidade/";
    $www        = $host.$webroot;
    
} else {

    $host       = 'http://' . $_SERVER['HTTP_HOST'];
    $backoffice = "backoffice";
    $webroot    = "/";
    $www        = $host.$webroot;
}

/*
 * Produto
 */
$produto_valor = '49,49';
$id_proprio    = 'livro_'.time();
$razao         = 'Nivel A Qualidade';

/*
 * Includes
 */
require_once('db.php');
require_once('posts.php');
?>