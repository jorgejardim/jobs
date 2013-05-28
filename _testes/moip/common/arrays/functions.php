<?php
/** 
* Arquivo com diversas funчѕes para tratamento de arrays
* @access public  
* @package includes
* @subpackage strings
*/

//BUSCA O VALOR MAIS PROXIMO
function near($value, $array) {
    if (count($array) == 1) 
	    return $array[0];
 
    sort($array);
 
    $index = floor(count($array) / 2);
 
    if ($array[$index] == $value) 
	    return $value;
 
    if ($value < $array[$index]) 
        return near($value, array_slice($array, 0, $index));
 
    if ($value > $array[$index])
        return near($value, array_slice($array, $index));
}

// PESQUISA EM ARRAY
// Uso: in_array_php3(string,array) 
function in_array_php3($str,$dest) { 
    while (list($a,$b)=each($dest)) { 
        if ($str==$b) {
		    $existe = 1;
            return $existe; 
            break; 
        } 
    } 
} 

/**
* Funчуo que realiza pesquisa em array multidimencional
* @param String $strSearch, Array $arrMyArray
* @return array
*/
function multiArraySearch($strSearch, $arrMyArray) {
	$value = false;
	$x = 0;
	foreach($arrMyArray as $temp) {
		$search = array_search($strSearch, $temp);
		if(strlen($search) > 0 && $search >= 0) {
			$value[0] = $x;
			$value[1] = $search;
		}
		$x++;
	}
	return $value;
}

//LIMPA OS VALORES DOS ARRAYS
function limpa_valores_array($array) {
    foreach(array_keys($array) as $key) {
	    if($key!='enviar') {
		    $array[$key] = '';
		}
	}
	return $array;
}
?>