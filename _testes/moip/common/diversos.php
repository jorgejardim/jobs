<?php
 /** 
 * Funções diversas 
 * @author Jorge Jardim <jorge@frames.com.br>
 * @copyright © 2009, Jorge Jardim 
 * @access public 
 * @return string 
 */

 /** 
 * Retorna a quantidade os nos de endereço até a raiz da pasta web
 * @author Jorge Jardim <jorge@frames.com.br>
 * @return string 
 */
 function nos_ate_raiz() {
	 $total = sizeof(explode('/',$_SERVER['PHP_SELF']))-2;
	 for($i=0;$i<$total;$i++)
		 $nos .= '../';
	 return $nos;
 }

 /** 
 * Cria os botoes de procurar nos formularios
 * @author Jorge Jardim <jorge@frames.com.br>
 * @return string 
 */
 function link_box($name,$title,$link,$default,$javascript=1) {
	 
	 if(!preg_match('/\(/',$link)) { //nao for funcao
		 $link = "Boxy.load('".$link."');";
	 }
     $res = "<a href=\"javascript:void(0)\" class=\"box_procurar\" onclick=\"box_loading('".$name."');Boxy.DEFAULTS.title = '".$title."';".$link."\"><img id=\"".$name."_img\" src=\"".IMG_HTTP_SISTEMA."procurar.png\" style=\"margin-bottom:1px;\" border=\"0\" align=\"absmiddle\" /></a>&nbsp;<span id=\"".$name."_span\" style=\"color:#808080\">".$default."</span>";
	 
	 if($javascript) {
		 $res .= "<script>function box_".$name."(v,l) { $('#".$name."_id').val(v); $('#".$name."_span').html(l); }</script>";
	 }
	 return $res;
 }
?>