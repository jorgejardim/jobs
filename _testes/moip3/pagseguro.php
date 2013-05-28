<?php
header('location:http://www.saudeviver.com.br/saudeviver/moip/formulario.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
<head>
<title>.:: Sa&uacute;de Viver Consultoria e Assessoria em Nutri&ccedil;&atilde;o ::.</title>
<meta name="author" lang="pt-br" content="Jorge Jardim" />
<meta name="title" content="Saúde Viver Consultoria e Assessoria em Nutrição" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<form  target="PagSeguro" action="https://pagseguro.uol.com.br/security/webpagamentos/webpagto.aspx" method="post" />
<input type="hidden" name="email_cobranca" value="juliana@saudeviver.com.br" />
<input type="hidden" name="tipo" value="CP" />
<input type="hidden" name="moeda" value="BRL" />
<input type="hidden" name="item_id_1" value="001" />
<input type="hidden" name="item_descr_1" value="Serviços de Consultoria em Nutrição" />
<input type="hidden" name="item_quant_1" value="1" />
<input type="hidden" name="item_frete_1" value="0" />
<input type="hidden" name="item_peso_1" value="0" />
<input type="hidden" name="cliente_compl" value=" " />
<input type="hidden" name="cliente_pais" value="BRA" />

<table width="400" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor="#999999">
  <tr>
    <td>Valor:</td>
    <td>
      <input name="item_valor_1" type="text" size="15" /> 
      (0,00)
    </td>
  </tr>
  <tr>
    <td nowrap="nowrap">Nome do Cliente:</td>
    <td>
      <input name="cliente_nome" type="text" size="35" />
    </td>
  </tr>
  <tr>
    <td nowrap="nowrap">E-mail do Cliente:</td>
    <td>
      <input name="cliente_email" type="text" size="40" />
    </td>
  </tr>
  <tr>
    <td nowrap="nowrap">Telefone do Cliente:</td>
    <td>
      <input type="text" name="cliente_ddd" size="2" value="11" />
      <input name="cliente_tel" type="text" size="10" /> (somente números)
    </td>
  </tr>
  <tr>
    <td>Endereço: </td>
    <td>
      <input name="cliente_end" type="text" size="45" />
    </td>
  </tr>
  <tr>
    <td>Número:</td>
    <td>
      <input name="cliente_num" type="text" size="5" />
    </td>
  </tr>
  <tr>
    <td>Bairro:</td>
    <td>
      <input name="cliente_bairro" type="text" value="" size="15" />
    </td>
  </tr>
  <tr>
    <td>Cidade:</td>
    <td>
      <input name="cliente_cidade" type="text" value="São Paulo" size="15" />
    </td>
  </tr>
  <tr>
    <td>UF:</td>
    <td>
      <input name="cliente_uf" type="text" value="SP" size="3" />
    </td>
  </tr>
  <tr>
    <td>CEP:</td>
    <td>
      <input name="cliente_cep" type="text" size="15" /> (somente números)
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="image" src="https://pagseguro.uol.com.br/Security/Imagens/btnfinalizaBR.jpg" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
      </div>
    </td>
  </tr>
</table>
</form>
</body>
</html>
