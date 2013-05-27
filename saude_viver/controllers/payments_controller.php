<?php
class PaymentsController extends AppController {

    var $name  = 'Payments';
    var $uses = array('Inscricao');   
    
    /*
     * Cadastro de notificações de Intermediarios de pagamentos
     * Ex: MoIP, PagSeguro, PagamentoDigital....
     * Url: /payments/notificacao/{INTERMEDIADOR}
     */
    function notificacao($sistema=false) {
       
        $this->layout = 'debug';
        $this->render(false);
        $email = false;
                
        if($sistema) {
            $funcao = '_notificacao_campos_'.$sistema;
            $campos = $this->$funcao();
        } else {
            $campos = $this->_notificacao_campos_default();
        }
        
        if(!empty($campos['id'])) {
            
            //verifica se o status de pagamento ja esta salvo
            $payment['Inscricao'] = $campos;
            $anterior = $this->Inscricao->find('count', array('conditions'=>array(
                              'Inscricao.id'     => $campos['id'],
                              'Inscricao.status' => $campos['status'])));
            if(!$anterior) {  
                //salva o novo status de pagamento                
                if(!$this->Inscricao->save($payment)) {
                    debug($payment);
                    echo 'Erro ao salvar o pagamento';
                    die();
                }
            } else {
                echo 'Pagamento salvo anteriormente';
                die();                
            }
                           
            //compra aprovada
            if($campos['status']==1) {
                
                $Inscricao = $this->Inscricao->find('first', array('conditions'=>array(
                                   'Inscricao.id' => $campos['id'])));
                    
                //email
                $this->set('nome', $Inscricao['Inscricao']['nome']);
                $this->Email->to       = $Inscricao['Inscricao']['email'];
                $this->Email->bcc      = array('faleconosco@saudeviver.com.br');
                $this->Email->subject  = 'Compra Aprovada - Saúde Viver';
                $this->Email->template = 'compra_aprovada'; 
                if($this->Email->send()) {
                    echo 'E-mail enviado!<br />';             
                }                
            }

            //debug($Inscricao);
            echo 'OK!';
            
        } else {            
            echo 'no post!';
        }       
    }        
    
    /*
     * Status
     */    
    function payments_status() {
        $status[0] = 'Aguardando';
        $status[1] = 'Aprovado';
        $status[3] = 'Cancelado';
        $status[4] = 'Estornado';
        $this->set('status', $status);
        return $status;
    }    
        
    /*
     * #########################################################################
     * Abaixo somente funções para
     * Estruturar os campos de acordo 
     * com cada sistema Intermediador
     * #########################################################################
     */          
    private function _notificacao_campos_default() {
        
        $campo['id']             = $_POST['cod_moip'];
        $campo['tipo_pagamento'] = $_POST['tipo_pagamento'];         
        $campo['status']         = $this->_notificacao_status($_POST['status_pagamento'],$campo['system']);
        return $campo;  
    } 
    
    private function _notificacao_campos_pagseguro() {
        
        $campo['id']             = str_replace('-', '', $_POST['TransacaoID']);
        $campo['status']         = $this->_notificacao_status($_POST['StatusTransacao'],$campo['system']);
        $campo['tipo_pagamento'] = $_POST['TipoPagamento'];
        return $campo; 
    } 
    
    private function _notificacao_campos_teste($id=null) {
        
        $campo['id']             = '201205251443099890000018762655';
        $campo['status']         = $this->_notificacao_status(4,'moip');
        $campo['tipo_pagamento'] = 'Boleto';
        return $campo; 
    }     
    
    private function _notificacao_campos_moip() {
        return $this->_notificacao_campos_default();
    } 
    
    private function _notificacao_status($st,$sistema='moip') {
        
        if($sistema=='moip') {
            $status['2'] = 0; // Aguardando - iniciado
            $status['3'] = 0; // Aguardando - boleto impresso
            $status['6'] = 0; // Aguardando - em análise
            $status['1'] = 1; // Aprovado - autorizado
            $status['4'] = 1; // Aprovado - concluido
            $status['5'] = 3; // Cancelado pelo Intermediador - cancelado
            $status['7'] = 4; // Estornado - estornado
                    
        } elseif($sistema=='pagseguro') {
            $status['Aguardando Pagto'] = 0; // Aguardando
            $status['Em Análise']       = 0; // Aguardando
            $status['Aprovado']         = 1; // Aprovado
            $status['Completo']         = 1; // Aprovado
            $status['Cancelado']        = 3; // Cancelado pelo Intermediador
            $status['Devolvido']        = 4; // Estornado               
                    
        } elseif($sistema=='paypal') {
            $status['Created']           = 0; // Aguardando
            $status['Completed']         = 1; // Aprovado
            $status['Processed']         = 1; // Aprovado
            $status['Canceled_Reversal'] = 3; // Cancelado pelo Intermediador
            $status['Denied']            = 3; // Cancelado pelo Intermediador
            $status['Expired']           = 3; // Cancelado pelo Intermediador
            $status['Failed']            = 3; // Cancelado pelo Intermediador
            $status['Voided']            = 3; // Cancelado pelo Intermediador
            $status['Refunded']          = 4; // Estornado  
            $status['Reversed']          = 4; // Estornado  
        }
        return $status[$st];
    }  
    
    /*
     * Before filter
     */
    function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->deny('*');
        $this->Auth->allow('*');       
    }       
}