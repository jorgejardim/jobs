<?php
/** 
* Arquivo com diversas funções usuais
* @access public  
* @package includes
* @subpackage common
*/

/** 
* Função para conversão de datas (aaaa-mm-dd -> dd/mm/aaaa || dd/mm/aaaa -> aaaa-mm-dd) (com ou sem H:i:s)
* @access public 
* @param String[] $data
* @return String[]  
*/
function converte_data($data) {

	$data = trim($data);
	$exp  = explode(' ',$data);
	$data = $exp[0];
	if(strstr($data, "/")) {
		$a = explode ("/", $data);
		$v_data = $a[2] . "-". $a[1] . "-" . $a[0];
	} else {
		$a = explode ("-", $data);
		$v_data = $a[2] . "/". $a[1] . "/" . $a[0];	
	}
	if(($data!='0000-00-00')and($data!='00/00/000')and($data))
	    return $v_data;
}

/** 
* Função para conversão de horas (aaaa-mm-dd H:i:s -> H:i || H:i:s -> H:i || H:i -> H:i)
* @access public 
* @param String[] $hora
* @return String[]  
*/
function converte_hora($hora) {
	$hora = trim($hora);
	if(preg_match("/ /", $hora)) {
		$exp  = explode(' ',$hora);
		$hora = $exp[1];
	}
	return substr($hora,0,5);
}

/** 
* Retorna o dia da semana escrito em português (dd)
* @access public 
* @param Int[] $dia
* @return String[]  
*/
function escreve_dia($dia) {

	switch($dia) { 
		case '0' : $diaext = 'Domingo';        break; 
		case '1' : $diaext = 'Segunda-feira';  break; 
		case '2' : $diaext = 'Terça-feira';    break; 
		case '3' : $diaext = 'Quarta-feira';   break; 
		case '4' : $diaext = 'Quinta-feira';   break; 
		case '5' : $diaext = 'Sexta-feira';    break; 
		case '6' : $diaext = 'Sábado';         break; 
	} 
	return $diaext;
}

/** 
* Retorna o dia da semana escrito em português abreviado (dd)
* @access public 
* @param Int[] $dia
* @return String[]  
*/
function escreve_dia_abrev($dia) {

	$semana = escreve_dia($dia);
	return "<abbr title=\"".$semana."\" class=\"noborder\">".substr($semana,0,3)."</abbr>";
}

/** 
* Retorna o mês escrito em português (mm)
* @access public 
* @param Int[] $mes
* @return String[]  
*/
function escreve_mes($mes) {
    while(strlen($mes)<2) {
        $mes = '0'.$mes; 
    }
	switch($mes) { 
		case '01' : $mesext = 'Janeiro';        break; 
		case '02' : $mesext = 'Fevereiro';      break; 
		case '03' : $mesext = 'Março';          break; 
		case '04' : $mesext = 'Abril';          break; 
    	case '05' : $mesext = 'Maio';           break; 
		case '06' : $mesext = 'Junho';          break; 
		case '07' : $mesext = 'Julho';          break; 
		case '08' : $mesext = 'Agosto';         break; 
		case '09' : $mesext = 'Setembro';       break; 
		case '10' : $mesext = 'Outubro';        break; 
		case '11' : $mesext = 'Novembro';       break; 
		case '12' : $mesext = 'Dezembro';       break;
	} 
	return $mesext;
}

/** 
* Retorna o mês escrito em português abreviado (mm)
* @access public 
* @param Int[] $mes
* @return String[]  
*/
function escreve_mes_abrev($mes) {

	$mes = escreve_mes($mes);
	return substr($mes,0,3);
}

/** 
* Função que soma dias em datas
* @access public 
* @param String[] $pData Data incial (dd/mm/aaaa)
* @param String[] $pDias Quantidade de dias para a soma
* @param Int[] $converte 1 = Retorna a data no formato inverso (aaaa-mm-dd)
* @return String[]  
*/
function soma_data($pData, $pDias, $converte=1) { 
    if(ereg("([0-9]{2})/([0-9]{2})/([0-9]{4})", $pData, $vetData)){; 
        $fDia = $vetData[1]; 
        $fMes = $vetData[2]; 
        $fAno = $vetData[3]; 

        for($x=0;$x<$pDias;$x++){ 
            if($fMes == 1 || $fMes == 3 || $fMes == 5 || $fMes == 7 || $fMes == 8 || $fMes == 10 || $fMes == 12) { 
                $fMaxDia = 31; 
            } elseif($fMes == 4 || $fMes == 6 || $fMes == 9 || $fMes == 11) { 
                $fMaxDia = 30; 
            } else { 
                if($fMes == 2 && $fAno % 4 == 0 && $fAno % 100 != 0) { 
                    $fMaxDia = 29; 
                } elseif($fMes == 2) { 
                    $fMaxDia = 28; 
                } 
            } 
            $fDia++; 
            if($fDia > $fMaxDia) { 
                if($fMes == 12) { 
                    $fAno++; 
                    $fMes = 1; 
                    $fDia = 1; 
                } else { 
                    $fMes++; 
                    $fDia = 1; 
                } 
            } 
        } 
        if(strlen($fDia) == 1) $fDia = "0" . $fDia; 
        if(strlen($fMes) == 1) $fMes = "0" . $fMes; 
        if($converte) {
		    return $fAno."-".$fMes."-".$fDia; 
		} else {
		    return $fDia."/".$fMes."/".$fAno; 
		}
    } else { 
        return "Data Inválida."; 
    } 
} 

/** 
* Função que subtrai dias em datas
* @access public 
* @param String[] $pData Data incial (dd/mm/aaaa)
* @param String[] $pDias Quantidade de dias para a subtração
* @param Int[] $converte 1 = Retorna a data no formato inverso (aaaa-mm-dd)
* @return String[]  
*/
function subtrai_data($pData, $pDias, $converte=1) { 

	if(ereg("([0-9]{2})/([0-9]{2})/([0-9]{4})", $pData, $vetData)) {
        $fDia = $vetData[1]; 
        $fMes = $vetData[2]; 
        $fAno = $vetData[3]; 

        for($x=0;$x<$pDias;$x++) { 
            $fDia--; 
             
            if($fDia == 0) $fMes--; 
            if($fMes == 0) { $fAno--; $fMes = 12;} 
             
            if($fDia == 0) { 
                if($fMes == 1 || $fMes == 3 || $fMes == 5 || $fMes == 7 || $fMes == 8 || $fMes == 10 || $fMes == 12) { 
                    $fDia = 31; 
                } elseif($fMes == 4 || $fMes == 6 || $fMes == 9 || $fMes == 11) { 
                    $fDia = 30; 
                } else { 
                    if($fMes == 2 && $fAno % 4 == 0 && $fAno % 100 != 0) { 
                        $fDia = 29; 
                    } elseif($fMes == 2) { 
                        $fDia = 28; 
                    } 
                } 
            } 
        } 
        if(strlen($fDia) == 1) $fDia = "0" . $fDia; 
        if(strlen($fMes) == 1) $fMes = "0" . $fMes; 
        if($converte) {
		    return $fAno."-".$fMes."-".$fDia; 
		} else {
		    return $fDia."/".$fMes."/".$fAno; 
		}
    } else { 
        return "Data Inválida."; 
    } 
} 

/** 
 Função que retorna a quantidade de dias entre duas datas
 @access public 
 @param String[] $from Data incial (aaaa-mm-dd)
 @param String[] $to   Data final (aaaa-mm-dd)
 @return Int[]   Quantidade de dias 
*/
function dias_diferentes($from, $to) { 

    list( $from_year, $from_month, $from_day) = explode("-", $from); 
    list( $to_year, $to_month, $to_day) = explode("-", $to); 

    $from_date = mktime(0,0,0,$from_month,$from_day,$from_year); 
    $to_date   = mktime(0,0,0,$to_month,$to_day,$to_year); 
    
    $days = ($to_date - $from_date)/86400;
    $days = ceil($days) ;
       
    return $days; 
} 

/** 
* Função que retorna a quantidade de dias de um mês
* @access public 
* @param String[] $ano Ano (aaaa)
* @param String[] $mes Mês (mm)
* @return Int[]   Quantidade de dias 
*/
function qtd_dias_mes($mes,$ano) {

    while(strlen($mes)<2)
        $mes = '0'.$mes; 
	$timestamp = mktime (0, 0, 1, $mes, 1, $ano);
    return date("t", $timestamp);
}

/** 
* Função que retorna a quantidade de dias uteis entre duas datas
* @access public 
* @param String[] $from       Data incial (aaaa-mm-dd)
* @param String[] $to         Data final (aaaa-mm-dd)
* @param Array[]  $feriados   Array de datas nao uteis (aaaa-mm-dd)
* @return Int[]   Quantidade de dias 
*/
function dias_uteis($dataInicial, $dataFinal, $feriados) {

	$total_feriados = sizeof($feriados);
    $qtd_dias       = dias_diferentes($dataInicial,$dataFinal);
    $dias_uteis     = 0;
    $dias_nao_uteis = 0;

    for($i=0; $i<=$qtd_dias; $i++) {

	    //pega os dias um a um
	    if($i>0) {
	  	    $data_dia = soma_data(converte_data($dataInicial),$i);
        } else {
            $data_dia = $dataInicial;
	    }
	    //formata data
	    $data_formatada = explode("-",$data_dia);
		while(strlen($data_formatada[1])<2) $data_formatada[1] = '0'.$data_formatada[1]; 
		while(strlen($data_formatada[2])<2) $data_formatada[2] = '0'.$data_formatada[2]; 
		while(strlen($data_formatada[3])<2) $data_formatada[3] = '0'.$data_formatada[3]; 

	    $data_verifica  = mktime (0,0,0,$data_formatada[1],$data_formatada[2],$data_formatada[0]);
//	    global $sql;
//		echo "$sql<br>$data_verifica  = mktime (0,0,0,$data_formatada[1],$data_formatada[2],$data_formatada[0])<br><br><br>";

        //pega dia da semana
	    $dia_semana = date("w", mktime (0,0,0,$data_formatada[1],$data_formatada[2],$data_formatada[0]));
    
	    //tira sábado e domingo
	    if(($dia_semana != 0) and ($dia_semana != 6)) {
	  
		    $dias_uteis++;
            //pega os feriados fora de fins de semana
		    for($j=0; $j<$total_feriados; $j++) {
				$feriado_dia = $feriados[$j];
				$feriado_formatado = explode("-",$feriado_dia);
	            $feriado_verifica  = mktime (0,0,0,$feriado_formatado[1],$feriado_formatado[2],$feriado_formatado[0]);
				if($data_verifica == $feriado_verifica) {
		            $dias_nao_uteis++;
		        }
		    }
	    }
    }
    return $dias_uteis - $dias_nao_uteis;
}

/** 
* Função que retorna as datas entre duas datas
* @access public 
* @param String[] $from       Data incial (aaaa-mm-dd)
* @param String[] $to         Data final (aaaa-mm-dd)
* @return Array[]   Datas (aaaa-mm-dd)
*/
function dias_entre_datas($dataInicial, $dataFinal) {

    $qtd_dias = dias_diferentes($dataInicial,$dataFinal);
    for($i=0; $i<=$qtd_dias; $i++) {

	    //pega os dias um a um
	    if($i>0) {
	  	    $data_dia = soma_data(converte_data($dataInicial),$i);
        } else {
            $data_dia = $dataInicial;
	    }
		$datas[] = $data_dia;
    }
    return $datas;
}

/** 
* Retorna verdadeiro se for dia util
* @access public 
* @param String[] $data
* @param Array[]  $feriados   Array de datas nao uteis (aaaa-mm-dd)
* @return Int[]
*/
function data_util($data, $feriados) {

	$dia = numero_dia($data);
	if(($dia!=0)and($dia!=6)) {
	    if(is_array($feriados)) {
		    foreach($feriados as $valor) {
				if($valor==$data) {
				    return false;
				}
			}
			return true;
		} else {
		    return true;
		}
	}
    return false;
}

/** 
* Função que retorna as datas uteis entre duas datas
* @access public 
* @param String[] $from       Data incial (aaaa-mm-dd)
* @param String[] $to         Data final (aaaa-mm-dd)
* @param Array[]  $feriados   Array de datas nao uteis (aaaa-mm-dd)
* @return Array[]   Datas uteis (aaaa-mm-dd)
*/
function datas_uteis($dataInicial, $dataFinal, $feriados) {

	$total_feriados = sizeof($feriados);
    $qtd_dias       = dias_diferentes($dataInicial,$dataFinal);
    $dias_uteis     = 0;
    $dias_nao_uteis = 0;

    for($i=0; $i<=$qtd_dias; $i++) {

	    //pega os dias um a um
	    if($i>0) {
	  	    $data_dia = soma_data(converte_data($dataInicial),$i);
        } else {
            $data_dia = $dataInicial;
	    }
	    //formata data
	    $data_formatada = explode("-",$data_dia);
	    $data_verifica  = mktime (0,0,0,$data_formatada[1],$data_formatada[2],$data_formatada[0]);

        //pega dia da semana
	    $dia_semana = date("w", mktime (0,0,0,$data_formatada[1],$data_formatada[2],$data_formatada[0]));
    
	    //tira sábado e domingo
	    if(($dia_semana != 0) and ($dia_semana != 6)) {
		  
		    $dias_uteis = 1;
			
            //pega os feriados fora de fins de semana
		    for($j=0; $j<$total_feriados; $j++) {
				$feriado_dia = $feriados[$j];
				$feriado_formatado = explode("-",$feriado_dia);
	            $feriado_verifica  = mktime (0,0,0,$feriado_formatado[1],$feriado_formatado[2],$feriado_formatado[0]);
				if(($data_verifica == $feriado_verifica)and($dias_uteis)) {
		            $dias_nao_uteis++;
				    $dias_uteis = 0;
		        }
		    }
			if($dias_uteis) {
				$datas[] = $data_dia;
			}
	    }
    }
    return $datas;
}

/** 
* Função que subtrai dias em datas
* @access public 
* @param String[] $pData Data incial (dd/mm/aaaa)
* @param String[] $pDias Quantidade de dias para a subtração
* @param Int[] $converte 1 = Retorna a data no formato inverso (aaaa-mm-dd)
* @return String[]  
*/
function subtrai_datas_uteis($dataInicial, $qtdDias, $feriados) {

	$i = 0;
	do {
		if($i>0) {
			$dataFinal = subtrai_data(converte_data($res[0]), 1, 1);
		} else {
			$dataFinal = subtrai_data(converte_data($dataInicial), 1, 1);
		}
		do {
			if($i>0) {
				$datas = datas_uteis($dataFinal, $res[0], $feriados);
			} else {
				$datas = datas_uteis($dataFinal, $dataInicial, $feriados);
			}
			$dataFinal = subtrai_data(converte_data($dataFinal), 1, 1);
		} while(sizeof($datas)<2);
		$dataFinal = '';
		
		if($i>0) {
			$res = array_merge($datas, $res);	
			asort($res);
		} else {
		    $res = $datas;
		}
		
		$res = array_unique($res);

	    ++$i;
		
		if($i==100) {
		    break;
		}
		
	} while(sizeof($res)<$qtdDias);

    return $res;
}

/** 
* Função que retorna o proximo dia util
* @access public 
* @param String[] $data       Data incial (dd-mm-aaaa)
* @param Array[]  $feriados   Array de datas nao uteis (dd-mm-aaaa)
* @return Array[] Datas uteis (aaaa-mm-dd)
*/
function prox_dia_util($data, $feriados) {

	do {
		$data  = soma_data($data, 1, 0);
		$total = dias_uteis(converte_data($data), converte_data($data), $feriados);
		
		if($total) {
			$i = 1;
		}
	} while($i<1);

	return $data;
}

/** 
* Função que retorna o dia util anterior
* @access public 
* @param String[] $data       Data incial (dd-mm-aaaa)
* @param Array[]  $feriados   Array de datas nao uteis (dd-mm-aaaa)
* @return Array[] Datas uteis (aaaa-mm-dd)
*/
function dia_util_anterior($data, $feriados) {

	do {
		$data  = subtrai_data($data, 1, 0);
		$total = dias_uteis(converte_data($data), converte_data($data), $feriados);
		
		if($total) {
			$i = 1;
		}
	} while($i<1);

	return $data;
}

/** 
* Função que retorna as datas uteis de um mes
* @access public 
* @param String[] $mes       Mês (mm)
* @param String[] $ano       Ano (aaaa)
* @param Array[]  $feriados  Array de datas nao uteis (aaaa-mm-dd)
* @return Array[] Datas uteis (aaaa-mm-dd)
*/
function datas_uteis_mes($mes, $ano, $feriados) {

    while(strlen($mes)<2)
        $mes = '0'.$mes; 

	$dataInicial = $ano.'-'.$mes.'-01';
	$dataFinal   = $ano.'-'.$mes.'-'.qtd_dias_mes($mes,$ano);

    return datas_uteis($dataInicial, $dataFinal, $feriados);
}

/** 
* Função que retorna as datas de um mes
* @access public 
* @param String[] $mes       Mês (mm)
* @param String[] $ano       Ano (aaaa)
* @param Array[]  $feriados  Array de datas nao uteis (aaaa-mm-dd)
* @return Array[] Datas uteis (aaaa-mm-dd)
*/
function datas_mes($mes, $ano) {

    while(strlen($mes)<2)
        $mes = '0'.$mes; 

	$dataInicial = $ano.'-'.$mes.'-01';
	$dataFinal   = $ano.'-'.$mes.'-'.qtd_dias_mes($mes,$ano);

    return dias_entre_datas($dataInicial, $dataFinal);
}

/** 
* Função que retorna um array com os dias da semana
* @access public 
* @param String[] $dias       todos ou uteis
* @return Array[] 
*/
function dias_semana($dias='todos') {

    $res[1] = "Segunda-feira";
    $res[2] = "Terça-feira";
    $res[3] = "Quarta-feira";
    $res[4] = "Quinta-feira";
    $res[5] = "Sexta-feira";
    if($dias=='todos') {
		$res[6] = "Sábado";
		$res[0] = "Domingo";
	}
	return $res;
}

/** 
* Função retorna o dia da semana a partir de uma data  
* @access public 
* @param String[] $data ($data='YYYY-MM-DD')
* @return String
*/
function dia_semana_data($data,$abreviado=0) {  

     $data=explode("-",$data);
     $diasemana = date("w", mktime(0,0,0,$data[1],$data[2],$data[0]));
     
	 if($abreviado) {
         return escreve_dia_abrev($diasemana);
	 } else {
         return escreve_dia($diasemana);
	 }
}

/** 
* Função retorna o numero do dia da semana
* @access public 
* @param String[] $data ($data='YYYY-MM-DD')
* @return Int
*/
function numero_dia($data) {  

     $data=explode("-",$data);
     $diasemana = date("w", mktime(0,0,0,$data[1],$data[2],$data[0]));
     return $diasemana;
}

/** 
* Função retorna um array com todos os dias da semana a partir de uma data
* Não inclui sabados e domingos
* @access public 
* @param Date[] $data ($data='YYYY-MM-DD')
* @return Array
*/
function datas_da_semana($data) {
    
     $dia = numero_dia($data);

	 if($dia==0) {
	     $data = soma_data(converte_data($data), 1); //muda para segunda
	 } elseif($dia==6) {
	     $data = subtrai_data(converte_data($data), 1); //muda para sexta
	 } 
	 if($dia==1) {
	     $inicio = $data;
	 } elseif($dia>1) {
		 $inicio = subtrai_data(converte_data($data), $dia-1);	 
	 }
	 $fim = soma_data(converte_data($inicio), 4);
	 
	 return dias_entre_datas($inicio, $fim);
}

/** 
* Retorna a Idade a partir da data de nascimento 
* @access public 
* @param Date[] $nascimento ($data='YYYY-MM-DD')
* @return String
*/
function pega_idade($nascimento) {
	list($anoNasc,$mesNasc,$diaNasc) = explode("-",$nascimento);
	list($ano,$mes,$dia)             = explode("-",date("Y-m-d"));
	$idade = $ano-$anoNasc;
	$idade = (($mes<$mesNasc)or(($mes==$mesNasc)and($dia<$diaNasc))) ? --$idade : $idade;
	return $idade;
}
?>