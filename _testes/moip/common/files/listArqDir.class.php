<?php
 /** 
 * Retorna um array com todos os arquivos de um diretorio e sub diretorios
 * @author Jorge Jardim <jorge@frames.com.br>
 * @copyright © 2007, Frames Software <www.frames.com.br>
 * @access public  
 * @package includes
 * @subpackage files
 */

 class ListaArquivosDir {

     var $dir;
     var $files;
     var $replace_key;
     var $replace_val;

     function ListaArquivosDir() {
		 $this->dir     = '';
		 $this->files   = array();
		 $this->dirFILO = new FILO();
     }

	 function setDir( $dir ) {
		 $this->dir   = $dir;
		 $this->files = array();
		 $this->dirFILO->zero();
		 $this->dirFILO->push( $this->dir );
	 }

	 function load() {
		 while( $this->curDir = $this->dirFILO->pop() ){
		     $this->loadFromCurDir();
	 	 }
	 }

     function loadFromCurDir() {
         if ( $handle = @opendir( $this->curDir ) ) {
             while ( false !== ( $file = readdir( $handle ) ) ) {
                 if ( $file == "." || $file == ".." ) continue;
                 $filePath = $this->curDir . '/' . $file;
                 $fileType = filetype( $filePath );
                 if ( $fileType == 'dir' ){
                     $this->dirFILO->push( $filePath );
                     continue;
                 }
                 if(!preg_match("/_notes/", $filePath)) {
				     $this->files[$this->replacePath($filePath,1)] = $this->replacePath($filePath,0);
				 }
             }
             closedir( $handle );
         } else{
             echo 'Erro ao abrir o diretório: "'.$this->curDir.'"';
         }
     }
	 
	 function replacePath($filePath,$value) {
	     
		 if(($this->replace_key)and($value)) {
		     $filePath = str_replace($this->dir,$this->replace_key,$filePath);
		 } elseif(($this->replace_val)and(!$value)) {
		     $filePath = str_replace($this->dir,$this->replace_val,$filePath);
		 }
		 return $filePath;
	 }
 } 

 class FILO{

     var $elements;
  
     function FILO() {
        $this->zero();
     }

     function push( $elm ) {
         array_push( $this->elements, $elm );
     }

     function pop() {
         return array_pop( $this->elements );
     }

     function zero() {
         $this->elements = array();
     }
 }
?>