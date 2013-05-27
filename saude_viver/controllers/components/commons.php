<?php
class CommonsComponent extends Object {
        
    /** 
    * Função retorna a data no formado americano
    * @access public 
    * @param String[] $data 
    * @return Int
    */
    function data_americana($data) { 
        if(strstr($data, "/")) {
            $data = $this->converte_data($data);
        }
        return $data;
    }  
        
    /** 
    * Função retorna a data no formado brasileiro
    * @access public 
    * @param String[] $data 
    * @return Int
    */
    function data_brasileira($data) { 
        if(strstr($data, "-")) {
            $data = $this->converte_data($data);
        }
        return $data;
    }  
    
    /** 
    * Função para conversão de datas 
    * (aaaa-mm-dd -> dd/mm/aaaa || dd/mm/aaaa -> aaaa-mm-dd) (com ou sem H:i:s)
    * @access public 
    * @param Date[] $data
    * @return Date[]  
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
        if(isset($exp[1]))
            $v_data .= ' '.$exp[1];
        if(($data!='0000-00-00')and($data!='00/00/000')and($data))
            return $v_data;
    }
    
    /** 
    * Função que soma dias em datas
    * @access public 
    * @param String[] $pData Data incial
    * @param String[] $pDias Quantidade de dias para a soma
    * @return String[]  
    */
    function soma_data($pData, $pDias) { 
        $pData = $this->data_americana($pData);
        if(@ereg("([0-9]{4})-([0-9]{2})-([0-9]{2})", $pData, $vetData)){; 
            $fDia = $vetData[3]; 
            $fMes = $vetData[2]; 
            $fAno = $vetData[1]; 

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
            return $fAno."-".$fMes."-".$fDia; 

        } else { 
            return "Data Inválida."; 
        } 
    } 

    /** 
    * Função que subtrai dias em datas
    * @access public 
    * @param Date[] $pData Data incial
    * @param Date[] $pDias Quantidade de dias para a subtração
    * @return Date[]  
    */
    function subtrai_data($pData, $pDias) { 
        $pData = $this->data_americana($pData);
        if(ereg("([0-9]{4})-([0-9]{2})-([0-9]{2})", $pData, $vetData)) {
            $fDia = $vetData[3]; 
            $fMes = $vetData[2]; 
            $fAno = $vetData[1]; 

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
            return $fAno."-".$fMes."-".$fDia; 
        } else { 
            return "Data Inválida."; 
        } 
    }     
    
    /** 
    * Função retorna o numero do dia da semana
    * @access public 
    * @param String[] $data 
    * @return Int
    */
    function numero_dia($data) { 
        $data = $this->data_americana($data);
        $data = explode(" ",$data);
        $data = explode("-",$data[0]);
        $diasemana = date("w", mktime(0,0,0,$data[1],$data[2],$data[0]));
        return $diasemana;
    }      
    
    /** 
    * Retorna a Idade a partir da data de nascimento 
    * @access public 
    * @param Date[] $nascimento 
    * @return String
    */
    function retorna_idade($nascimento) {
        $nascimento = $this->data_americana($nascimento);
        list($anoNasc,$mesNasc,$diaNasc) = explode("-",$nascimento);
        list($ano,$mes,$dia)             = explode("-",date("Y-m-d"));
        $idade = $ano-$anoNasc;
        $idade = (($mes<$mesNasc)or(($mes==$mesNasc)and($dia<$diaNasc))) ? --$idade : $idade;
        return $idade;
    }  
    
    /** 
    * Função que retorna a quantidade de dias uteis entre duas datas
    * @access public 
    * @param Date[] $from       Data incial 
    * @param Date[] $to         Data final 
    * @param Array[]  $feriados   Array de datas nao uteis 
    * @return Int[]   Quantidade de dias 
    */
    function dias_uteis($dataInicial, $dataFinal, $feriados, $final_de_semana=false) {
        $dataInicial = $this->data_americana($dataInicial);
        $dataFinal   = $this->data_americana($dataFinal);
        
        $total_feriados = sizeof($feriados);
        $qtd_dias       = $this->diferencas_de_datas($dataInicial,$dataFinal);
        $dias_uteis     = 0;
        $dias_nao_uteis = 0;
        sort($feriados);

        for($i=0; $i<=$qtd_dias; $i++) {

            //pega os dias um a um
            if($i>0) {
                $data_dia = $this->soma_data($dataInicial,$i);
            } else {
                $data_dia = $dataInicial;
            }
            
            $data_formatada = explode("-",$data_dia);
            $data_verifica  = mktime (0,0,0,$data_formatada[1],$data_formatada[2],$data_formatada[0]);

            //pega dia da semana
            $dia_semana = date("w", mktime (0,0,0,$data_formatada[1],$data_formatada[2],$data_formatada[0]));

            //tira sábado e domingo
            $domingo = 0; $sabado = 6;
            if($final_de_semana) {
                $domingo = 99; $sabado = 99;
            }
            if(($dia_semana != $domingo) and ($dia_semana != $sabado)) {

                $dias_uteis++;
                //pega os feriados fora de fins de semana
                for($j=0; $j<$total_feriados; $j++) {
                    $feriado_dia = $this->data_americana($feriados[$j]);
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
    Função que retorna a quantidade de dias entre duas datas
    @access public 
    @param String[] $from Data incial
    @param String[] $to   Data final
    @return Int[]   Quantidade de dias 
    */
    function diferencas_de_datas($from, $to) { 
        $from = $this->data_americana($from);
        $to   = $this->data_americana($to);
        
        list( $from_year, $from_month, $from_day) = explode("-", $from); 
        list( $to_year, $to_month, $to_day) = explode("-", $to); 

        $from_date = mktime(0,0,0,$from_month,$from_day,$from_year); 
        $to_date   = mktime(0,0,0,$to_month,$to_day,$to_year); 

        $days = ($to_date - $from_date)/86400;
        $days = ceil($days) ;

        return $days; 
    }   
    
    /** 
    * Retorna a quantidade desejada de proximos dias uteis
    * @access public 
    * @param Date[] $data_inicial 
    * @param Int[] $qtd_datas 
    * @param Array[] $dias_semana 
    * @param Array[] $feriados 
    * @return Array
    */    
    function proximas_datas_uteis($data_inicial, $qtd_datas, $dias_semana, $feriados, $final_de_semana=false) {
        $data_inicial = $this->data_americana($data_inicial);
        for($q=0;$q<$qtd_datas;$q++) {
            $i = 0;
            do {
                $data_inicial = $this->soma_data($data_inicial, 1, 0);
                $total = $this->dias_uteis($data_inicial, $data_inicial, $feriados, $final_de_semana);

                if($total) {
                    if (in_array($this->numero_dia($data_inicial), $dias_semana)) {
                        $i = 1;
                        $datas[] = $data_inicial;
                    }
                }
            } while($i<1);
        }
        return $datas;
    } 
    
    /** 
    * Verifica se a data é dia Util
    * se não for, retorna a proxima data
    * @access public 
    * @param Date[] $data_inicial 
    * @param Int[] $qtd_datas 
    * @param Array[] $dias_semana 
    * @param Array[] $feriados 
    * @return Array
    */   
    function verifica_data_util($data, $dias_semana, $feriados) {
        $data = $this->data_americana($data);
        $i = 0;
        do {
            $feriado = 0;
            if (in_array($this->data_brasileira($data), $feriados)) {                
                $feriado = 1;
            }
            if (in_array($this->numero_dia($data), $dias_semana) && !$feriado) {                
                $i = 1;
            }
            if(!$i) {
                $data = $this->soma_data($data, 1, 0);
            }
        } while($i<1);     
        return $data;
    }
    
    function limpa_url($url="") {
     
	 $url = strtolower($url);
         $url = $this->retira_acentos($url);
	 
	 $charvalidos = "abcdefghijklmnopqrstuvwxyz0123456789-_";
	 for ($i=0; $i<strlen($url); $i++) { 
		 $char = substr($url, $i, 1); 
		 if (substr_count($charvalidos, $char)==0) { 
			 $url = str_replace($char,"-",$url);
		 } 
	 }
	 return $url;
    } 
    
    // RETIRA ACENTOS
    function retira_acentos($texto) { 
        $array1 = array("á", "à", "â", "ã", "ä", "é", "è", "ê", "ë", "í", "ì", "î", "ï", "ó", "ò", "ô", "õ", "ö", "ú", "ù", "û", "ü", "ç", "Á", "À", "Â", "Ã", "Ä", "É", "È", "Ê", "Ë", "Í", "Ì", "Î", "Ï", "Ó", "Ò", "Ô", "Õ", "Ö", "Ú", "Ù", "Û", "Ü", "Ç"); 
        $array2 = array("a", "a", "a", "a", "a", "e", "e", "e", "e", "i", "i", "i", "i", "o", "o", "o", "o", "o", "u", "u", "u", "u", "c", "A", "A", "A", "A", "A", "E", "E", "E", "E", "I", "I", "I", "I", "O", "O", "O", "O", "O", "U", "U", "U", "U", "C"); 
        return str_replace($array1, $array2, $texto); 
    }    
}