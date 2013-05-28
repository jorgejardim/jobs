<?php
 /** 
 * Arquivo com diversas funções para tratamento de arquivos
 * @access public  
 * @package includes
 * @subpackage strings
 */

 // TAMANHO DE ARQUIVO PELO ARQUIVO
 function TamanhoArquivo($cFile) { 
	 if ( file($cFile) ){ 
		 $nSize = filesize($cFile); 
		 if ($nSize<1024) { return strval($nSize).' bytes'; } 
		 if ($nSize<pow(1024,2)) { return inttostr( $nSize/1024, 2).' KB' ; } 
		 if ($nSize<pow(1024,3)) { return inttostr( $nSize/pow(1024,2), 2).' MB'; } 
		 if ($nSize<pow(1024,4)) { return inttostr( $nSize/pow(1024,3), 2).' GB'; } 
	 } 
 } 

 // TRANSFORMA PRA BYTES, KB, MB OU GB
 function TamanhoArq($nSize) { 
	 if ($nSize<1024) { return strval($nSize).' bytes'; } 
	 if ($nSize<pow(1024,2)) { return inttostr( $nSize/1024, 2).' KB' ; } 
	 if ($nSize<pow(1024,3)) { return inttostr( $nSize/pow(1024,2), 2).' MB'; } 
	 if ($nSize<pow(1024,4)) { return inttostr( $nSize/pow(1024,3), 2).' GB'; } 
 } 

 function inttostr( $nNum, $nDecimais ) { 
	 $ResConv = strval($nNum); 
	 $Pos = strrpos ($ResConv, '.'); 
	 if ($pos === false) { 
		 return $ResConv; 
	 } else { 
		 return substr($ResConv,0,$Pos+$nDecimais+1); 
	 } 
 }

 // TAMANHO DOS ARQUIVOS DE UM DIRETORIO
 function get_size_dir($path,$total=0) {
	
	 $count = 0;
	 if(!is_dir($path)) {
		 return filesize($path) + $total;
	 }
	 if($handle = opendir($path)) {
		
		 $size['espaco'] = 0;
		 while(false !== ($file = readdir($handle))) {
			 if($file!='.' && $file!='..') {
				 $count++;
				 if($file=='index.html') {
				     continue;
				 }
				 $size['arquivos'][$file] = filesize($path.'/'.$file);
				 $size['espaco'] = get_size_dir($path.'/'.$file, $size['espaco']);
			 }
		 }
		 closedir($handle);
		 return $size;
	 }
 } 
?>