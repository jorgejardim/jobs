<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

define('TOKEN',    '584740CE1C114B1390F43861F319DBFB');
define('EMAIL',    'jorge@conteudodinamico.com.br');

require_once('source/PagSeguroLibrary/PagSeguroLibrary.php');

class EnviaPagamentoPagSeguro {

    public function envia($data, $id_proprio=null) {

        $uniqid = md5(uniqid(rand(), true));
        if(!$id_proprio) $id_proprio = $uniqid;
        $id_proprio = substr(str_replace('{id}', $uniqid, $id_proprio),0,32);
            
        $data = $this->format($data);
        
        $paymentRequest = new PagSeguroPaymentRequest();
        $paymentRequest->setCurrency("BRL");
        
        $produtos = Array(  
            'id' => '0001',  
            'description' => $data['razao'],  
            'quantity' => 1,  
            'amount' => $data['valor'],  
        );  
        $item = new PagSeguroItem($produtos);  
        $paymentRequest->addItem($item);                  
        
        $paymentRequest->setReference($id_proprio);
        
        $paymentRequest->setSender(
                $data['pagador']['nome'], 
                $data['pagador']['email'], 
                $data['pagador']['endereco']['ddd'], 
                $data['pagador']['endereco']['telefone']);
        
        $CODIGO_SEDEX = PagSeguroShippingType::getCodeByType('NOT_SPECIFIED');
        $paymentRequest->setShippingType($CODIGO_SEDEX);
                
        $paymentRequest->setShippingAddress(
                $data['pagador']['endereco']['cep'],  
                $data['pagador']['endereco']['logradouro'],  
                $data['pagador']['endereco']['numero'], 
                $data['pagador']['endereco']['complemento'], 
                $data['pagador']['endereco']['bairro'], 
                $data['pagador']['endereco']['cidade'], 
                $data['pagador']['endereco']['estado'], 
                'BRA');
        
        try {

            $credentials = new PagSeguroAccountCredentials(EMAIL, TOKEN);
            $url = $paymentRequest->register($credentials);
            $exp = explode('=', $url);

            $return['id_proprio'] = $id_proprio;
            $return['id']         = $exp[1];
            $return['url']        = $url;
            $return['sucesso']    = 1;                

        } catch (PagSeguroServiceException $e) {
                
            $return['erro']    = $e->getMessage();
            $return['sucesso'] = 0;
        }        
        return $return;
    }

    private function format($data) {
        $data = $this->formatValor($data);
        $data = $this->formatTelefone($data);
        $data = $this->formatCEP($data);
        return $data;
    }

    private function formatValor($data) {
        $v = $data['valor'];
        $data['valor'] = $v;
        return $data;
    }

    private function formatCEP($data) {
        $v = $data['pagador']['endereco']['cep'];
        $v = preg_replace("/[^0-9]/e",'',$v);
        $a = substr($v,0,5);
        $b = substr($v,5,3);
        $data['pagador']['endereco']['cep'] = "$a$b";
        return $data;
    }

    private function formatTelefone($data) {
        $v = $data['pagador']['endereco']['telefone'];
        $v = preg_replace("/[^0-9]/e",'',$v);
        $a = substr($v,0,2);
        $b = substr($v,2,4);
        $c = substr($v,6,4);
        $data['pagador']['endereco']['ddd']      = "$a";
        $data['pagador']['endereco']['telefone'] = "$b$c";
        return $data;
    }
}

/*
//  ** EXEMPLO

//Dados do Pagador
$data['pagador']['nome']                    = 'Jose da Silva';
$data['pagador']['email']                   = 'jose@silva.com';
$data['pagador']['celular']                 = '(34)3434-3434';
$data['pagador']['apelido']                 = 'zeh';
$data['pagador']['identidade']              = '111.111.111-11';
$data['pagador']['endereco']['logradouro']  = 'Rua do Zé';
$data['pagador']['endereco']['numero']      = '34';
$data['pagador']['endereco']['complemento'] = 's';
$data['pagador']['endereco']['bairro']      = 'santana';
$data['pagador']['endereco']['cidade']      = 'São Paulo';
$data['pagador']['endereco']['estado']      = 'SP';
$data['pagador']['endereco']['pais']        = 'Brasil';
$data['pagador']['endereco']['cep']         = '04814180';
$data['pagador']['endereco']['telefone']    = '(34)3434-3434';

//Dados do Recebedor
$data['recebedor']['login'] = 'testepengo1';

//Dados dos Comissionados
$data['comissoes'][0]['login']      = 'testepengo1';
$data['comissoes'][0]['percentual'] = '30.0';
$data['comissoes'][1]['login']      = 'testepengo2';
$data['comissoes'][1]['percentual'] = '40.0';
$data['comissoes'][2]['login']      = 'testepengo3';
$data['comissoes'][2]['percentual'] = '30.0';

//Para Forma de Pagamento apenas com Boleto
$data['forma_pagamento']['forma']                          = 'boleto';
$data['forma_pagamento']['args']['dias_expiracao']['dias'] = 35;
$data['forma_pagamento']['args']['dias_expiracao']['tipo'] = 'Corridos';

//Descrição da Compra
$data['razao'] = 'Teste do PagSeguro-PHP';

//Valor da Compra
$data['valor'] = '1234.56';

//Envia Compra
$pag = new EnviaPagamentoPagSeguro;
$res = $pag->envia($data);
echo '<pre>';
print_r($res);
print_r($data);
*/
?>