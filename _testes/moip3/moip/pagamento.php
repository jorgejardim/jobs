<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

//define('TOKEN',    'LBEBVGIIFPWRPBLKDSTMLGIXD7YP46NB');
//define('KEY',      'WKDR1CVFWPQU2Z9IDS69XXEUCWUKDC3HPPEM0VD2');
//define('AMBIENTE', 'sandbox'); // producao

define('TOKEN',    '4CGSGRVO8NCDXMNRFO22WDQIYZZSALEV');
define('KEY',      '6CCVL1RV2SEZBWM1TLHPNHECJBUJUUUAWCDEXBJY');
define('AMBIENTE', 'producao'); // producao

require_once('api/MoIP.php');

class EnviaPagamentoMoIP {

    public function envia() {

        $id_proprio = md5(uniqid(rand(), true));
        $this->format();

        $moip = new MoIP();
        $moip->setCredenciais(array('key'=>KEY,'token'=>TOKEN));
        $moip->setAmbiente(AMBIENTE);
        $moip->setIDProprio($id_proprio);
        
        $moip->setValor($_POST['valor']);
        $moip->setRazao($_POST['razao']);

        if(isset($_POST['pagador'])) {
            $moip->setPagador($_POST['pagador']);
        }
        if(isset($_POST['recebedor'])) {
            $moip->setRecebedor($_POST['recebedor']);
        } elseif(isset($_POST['comissoes'])) {
            $moip->setComissoes($_POST['comissoes']);
        }

        if(isset($_POST['forma_pagamento']['forma'])) {
            $moip->addFormaPagamento($_POST['forma_pagamento']['forma'],$_POST['forma_pagamento']['args']);
        }

        $moip->valida();
        $moip->envia();

        if($moip->getResposta()->sucesso==1) {

            $return['id_proprio'] = $id_proprio;
            $return['id']         = $moip->getResposta()->id;
            $return['url']        = $moip->getResposta()->url_pagamento;
            $return['sucesso']    = 1;

        } else {

            $return['erro']    = $moip->getResposta()->erro;
            $return['sucesso'] = 0;
        }
        return $return;
    }

    private function format() {
        $this->formatValor();
        $this->formatTelefone();
        $this->formatTelefone('celular');
        $this->formatCEP();
    }

    private function formatValor() {
        if(!isset($_POST['valor'])) return false;
        $v = $_POST['valor'];
        $v = str_replace('.', '', $v);
        $v = str_replace(',', '.', $v);
        $_POST['valor'] = $v;
    }

    private function formatCEP() {
        if(!isset($_POST['pagador']['endereco']['cep'])) return false;
        $v = $_POST['pagador']['endereco']['cep'];
        $v = preg_replace("/[^0-9]/e",'',$v);
        $a = substr($v,0,5);
        $b = substr($v,5,3);
        $_POST['pagador']['endereco']['cep'] = "$a-$b";
    }

    private function formatTelefone($l='telefone') {
        if(!isset($_POST['pagador']['endereco'][$l])) return false;
        $v = $_POST['pagador']['endereco'][$l];
        $v = preg_replace("/[^0-9]/e",'',$v);
        $a = substr($v,0,2);
        $b = substr($v,2,4);
        $c = substr($v,6,4);
        $_POST['pagador']['endereco'][$l] = "($a)$b-$c";
    }
}

/*
** EXEMPLO

//Dados do Pagador
$_POST['pagador']['nome']                    = 'Jose da Silva';
$_POST['pagador']['email']                   = 'jose@silva.com';
$_POST['pagador']['celular']                 = '(34)3434-3434';
$_POST['pagador']['apelido']                 = 'zeh';
$_POST['pagador']['identidade']              = '111.111.111-11';
$_POST['pagador']['endereco']['logradouro']  = 'Rua do Zé';
$_POST['pagador']['endereco']['numero']      = '34';
$_POST['pagador']['endereco']['complemento'] = 's';
$_POST['pagador']['endereco']['bairro']      = 'santana';
$_POST['pagador']['endereco']['cidade']      = 'São Paulo';
$_POST['pagador']['endereco']['estado']      = 'SP';
$_POST['pagador']['endereco']['pais']        = 'Brasil';
$_POST['pagador']['endereco']['cep']         = '04814180';
$_POST['pagador']['endereco']['telefone']    = '(34)3434-3434';

//Dados do Recebedor
$_POST['recebedor']['login'] = 'testepengo1';

//Dados dos Comissionados
$_POST['comissoes'][0]['login']      = 'testepengo1';
$_POST['comissoes'][0]['percentual'] = '30.0';
$_POST['comissoes'][1]['login']      = 'testepengo2';
$_POST['comissoes'][1]['percentual'] = '40.0';
$_POST['comissoes'][2]['login']      = 'testepengo3';
$_POST['comissoes'][2]['percentual'] = '30.0';

//Para Forma de Pagamento apenas com Boleto
$_POST['forma_pagamento']['forma']                          = 'boleto';
$_POST['forma_pagamento']['args']['dias_expiracao']['dias'] = 35;
$_POST['forma_pagamento']['args']['dias_expiracao']['tipo'] = 'Corridos';

//Descrição da Compra
$_POST['razao'] = 'Teste do MoIP-PHP';

//Valor da Compra
$_POST['valor'] = '1234.56';

//Envia Compra
$pag = new EnviaPagamentoMoIP;
$res = $pag->envia();
echo '<br><a href="'.$res['url'].'" target="_blank">link</a>'
*/
?>