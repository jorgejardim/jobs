<?php
/** 
* Arquivo com diversas fun��es para tratamento de strings
* @access public  
* @package includes
* @subpackage strings
*/

//*************************************************************************************


// FORMATA NOME DE PESSOAS
   /* 
    * $retorna
    *    nome           ->  rerna apenas o nome
    *    sobrenome      ->  retorna apenas o sobrenome
    *    nomesobrenome  ->  retorna o nome e sobrenome
    *    abreviado      ->  retorna o nome completo abreviado
    *    completo       ->  retorna o nome completo
    *    maximo         ->  tamanho maximo para abreviar o minimo possivel
	* $maxtamanho
	*    tamanho maximo de caracteres q deve ter o nome
	* $exibi_msg
	*    exibe erro se ultrapassar o tamanho maximo
   */
function formata_nome($nomecompleto, $retorna="nome", $maxtamanho=0, $exibi_msg=0){

    //retira os espa�os consecutivos
	$nomecompleto = preg_split("/\s+/", trim($nomecompleto));
    $nomecompleto = implode(" ", $nomecompleto);	

	//quebra a string nos espa�os
	$nome    = explode(" ", trim($nomecompleto));
	$tamanho = sizeof($nome); 

    //converte o primeiro caractere de cada nome para maiusculo
	for($i=0; $i<$tamanho; $i++) { 
        if (($nome[$i]!="de") and ($nome[$i]!="da") and ($nome[$i]!="e") and ($nome[$i]!="dos") and ($nome[$i]!="das") and ($nome[$i]!="do")) { 
            $nome[$i] = ucfirst(strtolower($nome[$i]));                              
        } 
    } 
    
	//retorna apenas o nome
	if($retorna=="nome")
	    return $nome[0];
		
	//retorna apenas o sobrenome
	if($retorna=="sobrenome")
	    return $nome[$tamanho-1];
		
	//retorna apenas o nome e sobrenome
	if($retorna=="nomesobrenome")
	    return $nome[0]." ".$nome[$tamanho-1];

	//retorna o nome completo
	if($retorna=="completo") {
	    for($i=0; $i<$tamanho; $i++) { 
            if($i==$tamanho-1) {$espaco="";} else {$espaco=" ";}
		    $completo .= $nome[$i].$espaco;                              
        } 
	    return $completo;
	}

	//retorma o nome abreviado
	if($retorna=="abreviado") { 
        $abreviado = $nome[0]." "; 
        for($i=1; $i<$tamanho-1; $i++){ 
            if (($nome[$i]!="de") and ($nome[$i]!="da") and ($nome[$i]!="e") and ($nome[$i]!="dos") and ($nome[$i]!="das") and ($nome[$i]!="do")) { 
                $reducao = substr($nome[$i], 0, 1); 
                $abreviado .= $reducao.". "; 
            } else { 
                $abreviado .= $nome[$i]." "; 
            } 
        }
        $abreviado .= $nome[$tamanho-1]; 
        return $abreviado; 
    } 

	//retorma o nome maximo
	if($retorna=="maximo") { 
	    for($i=0; $i<$tamanho; $i++) { 
            if($i==$tamanho-1) {$espaco="";} else {$espaco=" ";}
		    $maximo .= $nome[$i].$espaco;                              
        } 
		if(strlen($maximo)>$maxtamanho) {
		    for($i=$tamanho-2; $i>0; $i--){ 
                if (($nome[$i]!="de") and ($nome[$i]!="da") and ($nome[$i]!="e") and ($nome[$i]!="dos") and ($nome[$i]!="das") and ($nome[$i]!="do")) { 
			        $meio[] = $nome[$i]." ";
			    }
            }
			$tamanho_meio = sizeof($meio)-1;
		    $vezes = 0;
		    do {
			    $maximo = str_replace($meio[$vezes],substr($meio[$vezes], 0, 1).". ",$maximo);
			    if((strlen($maximo)<=$maxtamanho) or ($vezes==$tamanho_meio)) {
			        $repete = 1;
			    }
			    ++$vezes;
		    } while($repete<1);
		}
		if((strlen($maximo)>$maxtamanho) and ($exibi_msg)) {
		    return "Mesmo abreviado, o nome ultrapassa o tamanho m�ximo permitido.";  
		} else {
		    return $maximo; 
		}
    } 
}
//************************************************************************************* 


// Caracteres Especiais PARA Caracteres HTML
function charHtml($str,$espaco = 0) { 

    $caractere    = Array(     '"',    '&',   '<',   '>',     '�',               '�',                                  'TM',      '�',      '�',      '�',      '�',       '�',       '�',       '�',       '�',       '�',      '�',      '�',       '�',       '�',     '�',     '�',      '�',      '�',      '�',      '�',       '�',       '�',    '�',    '�',       '�',       '�',       '�',       '�',      '�',      '�',     '�',     '�',       '�',       '�',       '�',       '�',      '�',      '�',     '�',     '�',       '�',       '�',       '�',       '�',       '�',       '�',      '�',      '�',       '�',       '�',     '�',     '�',       '�',       '�',       '�',       '�',       '�',       '�',      '�',      '�',     '�',     '�',       '�',       '�',     '�',      '�',      '�',      '�',     '�',     '�',      '�',       '�',       '�',       '�',    '�',      '�',     '�',     '�',    '�',    '�',     '�',    '�',     '�',     '�',     '�',       '�',       '�',       '�',      '�',       '�',     '�',      '�',       '�',    '�'); 
    $htmlEntidade = Array('&quot;','&amp;','&lt;','&gt;','&copy;','<sup>&reg;</sup>','<font size="-1"><sup>TM</sup></font>','&acute;','&laquo;','&raquo;','&iexcl;','&iquest;','&Agrave;','&agrave;','&Aacute;','&aacute;','&Acirc;','&acirc;','&Atilde;','&atilde;','&Auml;','&auml;','&Aring;','&aring;','&AElig;','&aelig;','&Ccedil;','&ccedil;','&ETH;','&eth;','&Egrave;','&egrave;','&Eacute;','&eacute;','&Ecirc;','&ecirc;','&Euml;','&euml;','&Igrave;','&igrave;','&Iacute;','&iacute;','&Icirc;','&icirc;','&Iuml;','&iuml;','&Ntilde;','&ntilde;','&Ograve;','&ograve;','&Oacute;','&oacute;','&Ocirc;','&ocirc;','&Otilde;','&otilde;','&Ouml;','&ouml;','&Oslash;','&oslash;','&Ugrave;','&ugrave;','&Uacute;','&uacute;','&Ucirc;','&ucirc;','&Uuml;','&uuml;','&Yacute;','&yacute;','&yuml;','&THORN;','&thorn;','&szlig;','&sect;','&para;','&micro;','&brvbar;','&plusmn;','&middot;','&uml;','&cedil;','&ordf;','&ordm;','&not;','&shy;','&macr;','&deg;','&sup1;','&sup2;','&sup3;','&frac14;','&frac12;','&frac34;','&times;','&divide;','&cent;','&pound;','&curren;','&yen;'); 

    $remonta = str_replace($caractere,$htmlEntidade,$str); 
    if($espaco != 0) $remonta = str_replace(' ',' ',$remonta); 

    return $remonta; 
}
//*************************************************************************************


// Acentuação para caracteres HTML
function acentos_html($str) { 

    $caractere    = Array(       '�',       '�',       '�',       '�',      '�',      '�',       '�',       '�',     '�',     '�',      '�',      '�',       '�',       '�',       '�',       '�',       '�',       '�',      '�',      '�',     '�',     '�',       '�',       '�',       '�',       '�',      '�',      '�',     '�',     '�',       '�',       '�',       '�',       '�',       '�',       '�',      '�',      '�',       '�',       '�',     '�',     '�',       '�',       '�',       '�',       '�',      '�',      '�',     '�',     '�',       '�',       '�',     '�'); 
    $htmlEntidade = Array('&Agrave;','&agrave;','&Aacute;','&aacute;','&Acirc;','&acirc;','&Atilde;','&atilde;','&Auml;','&auml;','&Aring;','&aring;','&Ccedil;','&ccedil;','&Egrave;','&egrave;','&Eacute;','&eacute;','&Ecirc;','&ecirc;','&Euml;','&euml;','&Igrave;','&igrave;','&Iacute;','&iacute;','&Icirc;','&icirc;','&Iuml;','&iuml;','&Ntilde;','&ntilde;','&Ograve;','&ograve;','&Oacute;','&oacute;','&Ocirc;','&ocirc;','&Otilde;','&otilde;','&Ouml;','&ouml;','&Ugrave;','&ugrave;','&Uacute;','&uacute;','&Ucirc;','&ucirc;','&Uuml;','&uuml;','&Yacute;','&yacute;','&yuml;'); 

    $remonta = str_replace($caractere,$htmlEntidade,$str); 

    return $remonta; 
}
//*************************************************************************************


// RETIRA ACENTOS
function retira_acentos($texto) { 
  $array1 = array("á", "à", "â", "ã", "ä", "é", "è", "ê", "ë", "í", "ì", "î", "ï", "ó", "ò", "ô", "õ", "ö", "ú", "ù", "û", "ü", "ç", "Á", "À", "Â", "Ã", "Ä", "É", "È", "Ê", "Ë", "Í", "Ì", "Î", "Ï", "Ó", "Ò", "Ô", "Õ", "Ö", "Ú", "Ù", "Û", "Ü", "Ç" );
  $array2 = array("a", "a", "a", "a", "a", "e", "e", "e", "e", "i", "i", "i", "i", "o", "o", "o", "o", "o", "u", "u", "u", "u", "c", "A", "A", "A", "A", "A", "E", "E", "E", "E", "I", "I", "I", "I", "O", "O", "O", "O", "O", "U", "U", "U", "U", "C" );
  return str_replace($array1, $array2, $texto); 
}
//*************************************************************************************


// CHARSET
function retira_acentos_all($str) {

    if(is_array($str)) {

        foreach($str as $key => $val) {

            if(is_array($str[$key])) {

                foreach($str[$key] as $key2 => $val2) {

                    if(is_array($str[$key][$key2])) {

                        foreach($str[$key][$key2] as $key3 => $val3) {

                            if(is_array($str[$key][$key2][$key3])) {

                                foreach($str[$key][$key2][$key3] as $key4 => $val4) {

                                    $str[$key][$key2][$key3][$key4] = retira_acentos($str[$key][$key2][$key3][$key4]);
                                }

                            } else {

                                $str[$key][$key2][$key3] = retira_acentos($str[$key][$key2][$key3]);
                            }
                        }

                    } else {

                        $str[$key][$key2] = retira_acentos($str[$key][$key2]);
                    }
                }

            } else {

                $str[$key] = retira_acentos($str[$key]);
            }
        }
        return $str;
    } else {

        return retira_acentos($str);
    }
}
//*************************************************************************************


// APENAS LETRAS E NUMEROS RETIRA OUTROS CARACTERES
function letras_numeros($string) {
   
   $string = retira_acentos($string);       //retira acentos
   $string = trim($string);                 //retira espa�o no inicio e fim
   $string = str_replace(" ","",$string);   //retira todos os espa�os
   //Lista de caracteres validos
   $charvalidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
   //retira os caracteres naum validos
   for ($i=0; $i<strlen($string); $i++){ 
       $char = substr($string, $i, 1); 
       if (substr_count($charvalidos, $char)==0) { 
            $string = str_replace($char,"",$string);
       } 
   }
   return $string; 
}
//*************************************************************************************


// FORMATA NUMERO
    //  1 = brasileiro
	//  2 = americano
function converte_numeros($valor, $forma=1) {
    if($forma == 1) {
		$res = number_format($valor, "2", ",", ".");
	} elseif($forma == 2) {
        $res = str_replace(".","",$valor);
        $res = str_replace(",",".",$res);
	}
    return $res;
}
//*************************************************************************************


// COLOCA CARACTERS A ESQUERDA
function string_esquerda($str,$tam,$carac=0) {
    while(strlen($str)<$tam)
        $str = $carac.$str; 
	return $str;
}
//*************************************************************************************


// RETIRA OS CARACTERS NÃO NUMERICOS
function apenasNumeros($var) {
    $tamanho = strlen($var);
    $numeros = array("0","1","2","3","4","5","6","7","8","9");
    $res = "";
    for($i=0; $i<$tamanho; $i++) {
	    $str = substr($var, $i, 1);
	    $existir = in_array_php3($str,$numeros);
	    if($existir) {
		    $res .= $str;
	    }
    }
    $res = chop($res);   
    return $res;
}
//*************************************************************************************


// HTML ENCODE
function html_encode($str) {
    if(is_array($str)) {
	    foreach($str as $key => $val) {
		    $str[$key] = htmlspecialchars($str[$key], ENT_QUOTES);
		}
	} else {
	    $str = htmlspecialchars($str, ENT_QUOTES);
	}
	return $str;
}
//*************************************************************************************


// HTML DECODE
function html_decode($str) {
    if(is_array($str)) {
	    foreach($str as $key => $val) {
		    $str[$key] = html_entity_decode($str[$key], ENT_QUOTES);
		}
	} else {
	    $str = html_entity_decode($str, ENT_QUOTES);
	}
	return $str;
}
//*************************************************************************************


// CHARSET
function charset($str,$encode=0) {

    if(is_array($str)) {

        foreach($str as $key => $val) {

            if(is_array($str[$key])) {

                foreach($str[$key] as $key2 => $val2) {

                    if(is_array($str[$key][$key2])) {

                        foreach($str[$key][$key2] as $key3 => $val3) {

                            if(is_array($str[$key][$key2][$key3])) {

                                foreach($str[$key][$key2][$key3] as $key4 => $val4) {

                                    if($encode) {
                                        $str[$key][$key2][$key3][$key4] = utf8_encode($str[$key][$key2][$key3][$key4]);
                                    } else {
                                        $str[$key][$key2][$key3][$key4] = utf8_decode($str[$key][$key2][$key3][$key4]);
                                    }
                                }

                            } else {

                                if($encode) {
                                    $str[$key][$key2][$key3] = utf8_encode($str[$key][$key2][$key3]);
                                } else {
                                    $str[$key][$key2][$key3] = utf8_decode($str[$key][$key2][$key3]);
                                }
                            }
                        }

                    } else {

                        if($encode) {
                            $str[$key][$key2] = utf8_encode($str[$key][$key2]);
                        } else {
                            $str[$key][$key2] = utf8_decode($str[$key][$key2]);
                        }
                    }
                }

            } else {

                if($encode) {
                    $str[$key] = utf8_encode($str[$key]);
                } else {
                    $str[$key] = utf8_decode($str[$key]);
                }
            }
        }
        return $str;
    } else {

        if($encode) {
            return utf8_encode($str);
        } else {
            return utf8_decode($str);
        }
    }
}
//*************************************************************************************


// UTF-8 DECODE
function charset_decode_utf_8($string) {

	/* Only do the slow convert if there are 8-bit characters */
    /* avoid using 0xA0 (\240) in ereg ranges. RH73 does not like that */
    if (! ereg("[\200-\237]", $string) and ! ereg("[\241-\377]", $string))
        return $string;

    // decode three byte unicode characters
    $string = preg_replace("/([\340-\357])([\200-\277])([\200-\277])/e", "'&#'.((ord('\\1')-224)*4096 + (ord('\\2')-128)*64 + (ord('\\3')-128)).';'", $string);

    // decode two byte unicode characters
    $string = preg_replace("/([\300-\337])([\200-\277])/e", "'&#'.((ord('\\1')-192)*64+(ord('\\2')-128)).';'", $string);

    return $string;
} 
//*************************************************************************************


// CHARSET DECODE
function charset_decode($str) {
 
    $tmp = charset_decode_utf_8($str);
	
	if(preg_match('/\&\#/',$tmp)) {
	    return charset($str, 0);
	} else {
	    return $str;
	}
}
//*************************************************************************************


// QUEBRA DE LINHA
function nltobr($var){
    if($var){
		$array = array("\r\n", "\n\r", "\n", "\r");
		$var = str_replace($array, "<br />", $var);
		return $var;
    } else{
        return false;
    }
}
//*************************************************************************************


// TRANSFORMA PARA CAIXA ALTA
function str2upper($text) {
    return (strtr(strtoupper($text), '�����������������������','�����������������������'));
}
//*************************************************************************************


// TRANSFORMA PARA CAIXA BAIXA
function str2lower($text) {
	return (strtr(strtolower($text), '�����������������������','�����������������������'));
}
//**************************************************


// TRANSFORMA PARA CAIXA BAIXA
function texto_limite($string,$length,$replacer='...') { 
	if(strlen($string) > $length) {
		return (preg_match('/^(.*)\W.*$/', substr($string, 0, $length+1), $matches) ? $matches[1] : substr($string, 0, $length)) . $replacer;
	}
	return $string;
}
//*************************************************************************************
?>