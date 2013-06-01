<?php require_once('src/inc.php'); ?>
<style>
table.comentarios {
    background-color: #FFFFFF;
    border-collapse: collapse;
    width: 640px;
}
table.comentarios tr.comentario {
}
table.comentarios tr.comentario td {
    border: 1px solid #3F2300;
    color: #3F2300;
    font-family: arial;
    font-size: 14px;
    padding: 5px;
}
table.comentarios tr.comentario td strong {
}
table.comentarios tr.comentar td {
    border: 1px solid #3F2300;
}
table.comentarios tr.comentar table {
    background-color: #F2D6B3;
    border-collapse: collapse;
    width: 100%;
}
table.comentarios tr.comentar table th {
    border: 0 none;
    color: #3F2300;
    font-family: arial;
    font-size: 14px;
    text-align: right;
    vertical-align: top;
}
table.comentarios tr.comentar table td {
    border: 0 none;
    padding: 2px;
}
table.comentarios tr.comentar table td input {
    border: 1px solid #A48865;
    font-family: arial;
    font-size: 14px;
    padding: 2px;
    width: 400px;
}
table.comentarios tr.comentar table td textarea {
    border: 1px solid #A48865;
    font-family: arial;
    font-size: 14px;
    padding: 2px;
    width: 477px;
}
table.comentarios tr.comentar table td input[type="submit"] {
    background-color: #A48865;
    border: 1px solid #694D2A;
    color: #FFFFFF;
    cursor: pointer;
    font-family: arial;
    font-size: 14px;
    padding: 2px;
    vertical-align: super;
    width: 50px;
}
.msg-comentario {
    text-align: center;
    color: #f00;
    font-weight: bold;
}
</style>  
<div class="msg-comentario"><?php echo $ok; ?></div>
<form method="post">
    <input type="hidden" name="comentario" value="1" />
    <input type="hidden" name="page" value="<?php echo end(explode('/',$_SERVER['PHP_SELF'])); ?>" />
    <table class="comentarios">
        <tr class="comentar">
            <td>
                <table>
                    <tr>
                        <th>Nome:</th>
                        <td><input type="text" name="name" class="name" id="name" /></td>
                    </tr>   
                    <tr>
                        <th>E-mail:</th>
                        <td><input type="text" name="email" class="email" id="email" /></td>
                    </tr> 
                    <tr>
                        <th>Comentário:</th>
                        <td>
                            <textarea type="text" name="comment" class="comment" id="comment" ></textarea>
                            <input type="submit" name="Enviar" class="enviar" />
                        </td>
                    </tr> 
                </table>
            </td>
        </tr>    
        <?php $comentarios = listar_comentarios(); while($comentario = mysql_fetch_array($comentarios)) { ?>
            <tr class="comentario">
                <td><strong><?php echo nl2br(strip_tags($comentario['name'])); ?>:</strong> <?php echo nl2br(strip_tags($comentario['comment'])); ?></td>
            </tr>
        <?php } ?>
    </table>
</form>