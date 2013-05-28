<?php
/** 
* Arquivo com diversas funções para tratamento de numeros
* @access public  
* @package includes
* @subpackage numbers
*/

//*************************************************************************************


// TRANSFOMRA EM ALGARISMO ROMANO
function romano($N) {

	if(is_array($N)) { //para smarty
	    extract($N);
		$N = $numero;
	}
	
	$N1 = $N;
    $Y = "";
    while ($N/1000 >= 1) {$Y .= "M"; $N = $N-1000;}
    if ($N/900 >= 1) {$Y .= "CM"; $N=$N-900;}
    if ($N/500 >= 1) {$Y .= "D"; $N=$N-500;}
    if ($N/400 >= 1) {$Y .= "CD"; $N=$N-400;}
    while ($N/100 >= 1) {$Y .= "C"; $N = $N-100;}
    if ($N/90 >= 1) {$Y .= "XC"; $N=$N-90;}
    if ($N/50 >= 1) {$Y .= "L"; $N=$N-50;}
    if ($N/40 >= 1) {$Y .= "XL"; $N=$N-40;}
    while ($N/10 >= 1) {$Y .= "X"; $N = $N-10;}
    if ($N/9 >= 1) {$Y .= "IX"; $N=$N-9;}
    if ($N/5 >= 1) {$Y .= "V"; $N=$N-5;}
    if ($N/4 >= 1) {$Y .= "IV"; $N=$N-4;}
    while ($N >= 1) {$Y .= "I"; $N = $N-1;}
    return $Y;
}

//*************************************************************************************


// SOMA MOEDA BRASILEIRA (000.000.000,00)
function soma_moeda($moeda,$decimal_automatico=1) {
    $dec = 2;
	$tam = 0;
	if(is_array($moeda)) {
	    foreach($moeda as $valor) {
		    $valor = str_replace('.','',$valor);
		    $valor = str_replace(',','.',$valor);
			if($decimal_automatico) {
				$tam = strlen(strstr($valor,'.'))-1;
				$dec = $dec<$tam?$dec=$tam:$dec;
			}
			$res += $valor;
		}
	}
	return number_format($res,$dec,',','.');
}

//*************************************************************************************


// MULTIPLICA MOEDA BRASILEIRA (000.000.000,00)
function multiplica_moeda($moeda,$quantidade) {
	$valor = str_replace('.','',$moeda);
	$valor = str_replace(',','.',$valor);
	$res   = $valor * $quantidade;
	return number_format($res,2,',','.');
}
?>