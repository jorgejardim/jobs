<? 
  session_start();
  require_once('db.php'); 
  
  if($_POST['entrar']) {
	  
	  $sql = "select * from alunos_online 
	          where  email = '".$_POST['txt_email']."'
			  and id_curso = '".$_POST['sel_curso']."'
			  and    senha = '".$_POST['txt_senha']."'";
	  $res = mysql_query($sql);
	  
	  if(mysql_num_rows($res)) {
	  
	      $valor = mysql_fetch_array($res);
		  $_SESSION['logado'] = 1;
	  
		  $sql = "select * from cursos 
				  where id_curso = '".$valor['id_curso']."'";
		  $res = mysql_query($sql);
	      $valor = mysql_fetch_array($res);
		  
	      $_SESSION['local']  = $valor['local'];
	  
	  } else {
	      $msg = 'Senha inv&aacute;lida!';
	  }
  }
  
  if($_SESSION['logado']) {
	  require_once($_SESSION['local'].'index.htm');
	  
  } else {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cadastro</title>
<link href="css.css" rel="stylesheet" type="text/css">
</head>
<body>
<form method="post">
  <table width="550" class="logon" align="center" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2" align="center" style="border:0px; background-color:#FFF; padding-bottom:50px" bgcolor="#FFFFFF"><img src="logo.jpg" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="border:0px; background-color:#FFF;" bgcolor="#FFFFFF"><div align="center" style="color:#900"><strong><?=$msg?></strong></div></td>
    </tr>
    <tr>
      <td colspan="2" class="table-titulo" align="center">Acesso ao Curso On-Line</td>
    </tr>
    <tr>
      <td class="table-titulo" align="right">Curso: </td>
      <td>
        <select name="sel_curso">
          <? 
		    $sql = "select * from cursos order by curso";
			$res = mysql_query($sql);
			while($valor = mysql_fetch_array($res)) {
		  ?>
          <option value="<?=$valor['id_curso']?>"><?=$valor['id_curso']?> - <?=$valor['curso']?></option>
          <? } ?>
        </select>
      </td>
    </tr>
    <tr>
      <td class="table-titulo" align="right">Seu E-mail: </td>
      <td><input type="text" name="txt_email" size="40" maxlength="100" /></td>
    </tr>
    <tr>
      <td class="table-titulo" align="right">Senha: </td>
      <td><input type="text" name="txt_senha" size="15" /></td>
    </tr>
    <tr>
      <td colspan="2" class="table-titulo" align="center"><input type="submit" name="entrar" value="Entrar" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<? } ?>