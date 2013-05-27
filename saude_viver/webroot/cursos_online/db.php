<?php
  $host     = "dbmy0041.whservidor.com";
  $database = "consultori226_1";
  $user     = "consultori226_1";
  $password = "t4r5zjj";
  
  mysql_connect($host,$user,$password);
  mysql_select_db($database);
  
  //Gera senha
  function gerar_senha($num_chars=3) { 
  
	  $senha      = ""; 
	  $consoantes = "bcdfghjklmnpqrstvwxyzbcdfghjklmnpqrstvwxyz"; 
	  $vogais     = "aeiou"; 
  
	  $a = strlen($consoantes)-1; 
	  $b = strlen($vogais)-1; 
  
	  for($x=0;$x<$num_chars;$x++) {
  
		  $rand   = rand(0,$a); 
		  $rand1  = rand(0,$b); 
		  $str    = substr($consoantes,$rand,1); 
		  $str1   = substr($vogais,$rand1,1); 
		  $senha .= $str.$str1; 
	  }
	  return $senha; 
  }
?>