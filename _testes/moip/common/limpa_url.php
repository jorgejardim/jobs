<?php
/** 
* Função para limpar a url. Deixa apenas o dominio
* @author Jorge Jardim <jorge@frames.com.br>
* @version 1.0 
* @copyright © 2007, Frames Ltda. 
* @access public 
* @param String[] $url
* @return string 
*/

function limpa_url($url="") {
     
	 if(!$url) {
	     $url = $_SERVER['HTTP_HOST'];
	 }
	 $url = strtolower($url);
	 
	 $array = array('.referir','www.','.com','.br','.net','.ppg','.tempsite.ws');

	 $url = str_replace($array,'',$url);
	 
	 if(($url=='localhost')or($url=='127.0.0.1')or(!$url)) {
	     $url = 'conteudodinamico';
	 }

	 $charvalidos = "abcdefghijklmnopqrstuvwxyz0123456789-_";
	 for ($i=0; $i<strlen($url); $i++) { 
		 $char = substr($url, $i, 1); 
		 if (substr_count($charvalidos, $char)==0) { 
			 $url = str_replace($char,"_",$url);
		 } 
	 }
	 return $url;
}
?>