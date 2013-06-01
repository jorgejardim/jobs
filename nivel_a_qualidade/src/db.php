<?php
if (($_SERVER['HTTP_HOST'] == 'localhost')) {

    $host = "localhost";
    $user = "root";
    $pass = "t4r5zjj";
    $bd = "nivelaqualidade";   
    
} else {

    $host = "mysql01.nivelaqualidade.hospedagemdesites.ws";
    $user = "nivelaqualidade";
    $pass = "t4r5zjj";
    $bd = "nivelaqualidade";
}

$con = mysql_connect($host, $user, $pass) or die('Error:');
mysql_select_db($bd);
?>
