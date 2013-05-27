<?php
  require_once('db.php');
  
  $sql = "select * from `usuarios` where `email` = '".$_POST['email']."'";
  $res = mysql_query($sql);
  $total = mysql_num_rows($res);
  
  if(!$total) {
	  
	  $senha = gerar_senha(3);
  
	  $sql = "select * from `usuarios` where `apelido` = '".$_POST['apelido']."'";
	  $res2 = mysql_query($sql);
	  $apelido = mysql_num_rows($res2);
	  
	  $sql = "INSERT INTO `usuarios` SET 
	          `nome`           = '".$_POST['nome']."',
	          `email`          = '".$_POST['email']."',
	          `login`          = '".$_POST['email']."',
	          `senha`          = '".$senha."',
	          `telefone_ddd`   = '".$_POST['telefone_ddd']."',
	          `telefone`       = '".$_POST['telefone']."',
	          `celular_ddd`    = '".$_POST['celular_ddd']."',
	          `celular`        = '".$_POST['celular']."',
	          `cep`            = '".$_POST['cep']."',
	          `endereco`       = '".$_POST['endereco']."',
	          `numero`         = '".$_POST['numero']."',
	          `complemento`    = '".$_POST['complemento']."',
	          `bairro`         = '".$_POST['bairro']."',
	          `cidade`         = '".$_POST['cidade']."',
	          `uf`             = '".$_POST['uf']."',
	          `profissao`      = '".$_POST['profissao']."',
	          `apelido`        = '".$_POST['apelido']."',
	          `visitante`      = '0',
	          `fundador`       = '1'";
	  
  } else {
  
	  $sql = "select * from `usuarios` where `apelido` = '".$_POST['apelido']."' AND `email` != '".$_POST['email']."'";
	  $res2 = mysql_query($sql);
	  $apelido = mysql_num_rows($res2);
	  
	  $sql = "UPDATE `usuarios` SET 
	          `nome`           = '".$_POST['nome']."',
	          `telefone_ddd`   = '".$_POST['telefone_ddd']."',
	          `telefone`       = '".$_POST['telefone']."',
	          `celular_ddd`    = '".$_POST['celular_ddd']."',
	          `celular`        = '".$_POST['celular']."',
	          `cep`            = '".$_POST['cep']."',
	          `endereco`       = '".$_POST['endereco']."',
	          `numero`         = '".$_POST['numero']."',
	          `complemento`    = '".$_POST['complemento']."',
	          `bairro`         = '".$_POST['bairro']."',
	          `cidade`         = '".$_POST['cidade']."',
	          `uf`             = '".$_POST['uf']."',
	          `profissao`      = '".$_POST['profissao']."',
	          `apelido`        = '".$_POST['apelido']."',
	          `visitante`      = '0',
	          `fundador`       = '1'
	          WHERE `email` = '".$_POST['email']."'";
  }
  
  if(!$apelido) {
      mysql_query($sql);
	  
	  if(!$total) {
		  $id_usuario = mysql_insert_id();
	  } else {
		  $valor = mysql_fetch_array($res);
		  $id_usuario = $valor['id_usuario'];
	  }
	  
	  $sql = "INSERT INTO `pedidos` SET 
	          `id_usuario`   = '".$id_usuario."',
	          `id_transacao` = '".$_POST['id_transacao']."',
	          `produto`      = '".$_POST['produto']."',
	          `referencia`   = '".$_POST['referencia']."',
	          `sabor1`       = '".$_POST['sabor1']."',
	          `sabor2`       = '".$_POST['sabor2']."',
	          `peso`         = '".$_POST['peso']."',
	          `valor`        = '".$_POST['valor']."',
	          `valor_frete`  = '".$_POST['valor_frete']."',
	          `valor_total`  = '".$_POST['valor_total']."',
	          `ip`           = '".$_SERVER['REMOTE_ADDR']."',
	          `forma_envio`  = '".$_POST['forma_envio']."'";
      mysql_query($sql);
  
  } else {
	  //apelido ja existe
	  echo 'erro_1';  
  }
?>