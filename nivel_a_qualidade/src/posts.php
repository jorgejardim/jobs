<?php
require_once('inc.php');

/* *****************************************************************************
 * COMENTÁRIOS
 * *****************************************************************************/
if(isset($_POST['comentario'])) {

    $sql = "INSERT INTO `comments` (
                `name` ,
                `email` ,
                `comment` ,
                `page` ,
                `status` ,
                `created`
            ) VALUES (
                '".$_POST['name']."', 
                '".$_POST['email']."', 
                '".$_POST['comment']."', 
                '".$_POST['page']."', 
                '0', 
                '".date('Y-m-d H:i:s')."'
            );";
    mysql_query($sql);    
    
    $ok = 'Comentário enviado com sucesso!';
}

function listar_comentarios() {
    
    $page = end(explode('/',$_SERVER['PHP_SELF']));
    
    $sql = "SELECT *
            FROM `comments`
            WHERE `page` = '".$page."'
            AND `status` = 1";
    
    return mysql_query($sql);
}

/* *****************************************************************************
 * 
 * *****************************************************************************/
?>