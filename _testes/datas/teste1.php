<?php
include 'functions.php';

$data_inicial = '2011-11-01';
$feriados = array('2011-11-14', '2011-11-21', '2011-11-28');
$qtd_datas = 30;
$dias_semana = array(1,3);

function proximas_datas_uteis($data_inicial, $qtd_datas, $dias_semana, $feriados) {
    $data_inicial = converte_data($data_inicial);
    
    for($q=0;$q<$qtd_datas;$q++) {
        $i = 0;
	do {
            $data_inicial  = somadata($data_inicial, 1, 0);
            $total = diasUteis(converte_data($data_inicial), converte_data($data_inicial), $feriados);

            if($total) {
                if (in_array(numeroDia(converte_data($data_inicial)), $dias_semana)) {
                    $i = 1;
                    $datas[] = $data_inicial.' - '.diaSemanaData(converte_data($data_inicial)).' - '.numeroDia(converte_data($data_inicial));
                }
            }
	} while($i<1);
    }

    return $datas;
}

$datas = proximas_datas_uteis($data_inicial, $qtd_datas, $dias_semana, $feriados);

echo '<pre>';

print_r($datas);
print_r($dias_semana);
?>
