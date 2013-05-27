<?php
  session_start();
  require_once('db.php');
  
  $sql = "select * from `usuarios` where `email` = '".$_POST['email']."'";
  $res = mysql_query($sql);
  
  if(!mysql_num_rows($res)) {
	  
	  $senha = gerar_senha(3);
  
	  $sql = "insert into `usuarios` (`nome` ,`email` ,`login` ,`senha`) VALUES ('".$_POST['nome']."','".$_POST['email']."','".$_POST['email']."','".$senha."');";
	  mysql_query($sql);
  }
  
  $_SESSION['nome']  = $_POST['nome'];
  $_SESSION['email'] = $_POST['email'];
  
?>