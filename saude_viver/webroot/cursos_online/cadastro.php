<? 
  require_once('db.php'); 
  
  if($_POST['entrar']) {
	  
	  $sql = "insert into `alunos_online` 
	           (`id_curso` ,`nome` ,`email` ,`senha`) 
	           VALUES ('".$_POST['sel_curso']."','".$_POST['txt_nome']."','".$_POST['txt_email']."','".$_POST['txt_senha']."');";
	  mysql_query($sql);
	  
	  $msg = 'Cadastro realizado com sucesso!';
  }
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
      <td colspan="2" class="table-titulo" align="center">Novo Cadastro</td>
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
      <td class="table-titulo" align="right">Nome: </td>
      <td><input type="text" name="txt_nome" size="30" maxlength="50" /></td>
    </tr>
    <tr>
      <td class="table-titulo" align="right">E-mail: </td>
      <td><input type="text" name="txt_email" size="40" maxlength="100" /></td>
    </tr>
    <tr>
      <td class="table-titulo" align="right">Senha: </td>
      <td><input type="text" name="txt_senha" value="<?=gerar_senha(3)?>" size="15" /></td>
    </tr>
    <tr>
      <td colspan="2" class="table-titulo" align="center"><input type="submit" name="entrar" value="Entrar" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="border-left:0px; border-right:0px; background-color:#ffffff">&nbsp;</td>
    </tr>   
    <tr>
      <td colspan="2" class="table-titulo" align="center">Cadastros Realizados</td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="border:0px; height:3px; background-color:#ffffff"></td>
    </tr>   
    <tr>
      <td colspan="2" style="border:0px; padding:0px">
        <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td class="table-titulo" align="center">Nome</td>
            <td class="table-titulo" align="center">E-mail</td>
            <td class="table-titulo" align="center">Curso</td>
          </tr>
          <? 
		    $sql = "select * from alunos_online order by nome";
			$res = mysql_query($sql);
			while($valor = mysql_fetch_array($res)) {
		  ?>
              <tr style="cursor:default">
                <td><?=$valor['nome']?></td>
                <td title="Senha: <?=$valor['senha']?>"><?=$valor['email']?></td>
                <td align="center"><?=$valor['id_curso']?></td>
              </tr>
          <? } ?>
        </table>
      </td>
    </tr>
  </table>
</form>
</body>
</html>