<?php
if($_POST['img']) {
    header("Content-Type: image/jpeg");
    echo $_POST['img'];
} else {
    echo 'Nenhuma imagem enviada';
}
?>
