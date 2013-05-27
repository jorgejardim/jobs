<?php
class ContatoController extends AppController {

    var $name = 'Contato';
    var $uses = array();

    function index() {
        
        if(isset($this->data)) {
            $this->loadModel('Contato');
            $this->Contato->create();
            if ($this->Contato->save($this->data)) {    
                
                $this->set('data', $this->data['Contato']);
                
                $this->Email->to       = $this->data['Contato']['email'];
                $this->Email->subject  = 'Contato Site - Saúde Viver';
                $this->Email->template = 'obrigado_contato';
                $this->Email->send();               
                
                $this->Email->to       = 'faleconosco@saudeviver.com.br';
                $this->Email->subject  = 'Contato Site - Saúde Viver';
                $this->Email->template = 'copia_contato';
                if ( $this->Email->send() ) {
                    $this->Session->setFlash('Mensagem enviada com sucesso. Em breve entraremos em contato. Obrigado!');                    
                    $this->Session->write('conversao_contato', 1);
                    if(isset($this->data['Contato']['refer'])) {
                        $this->redirect($this->referer());
                        exit;
                    }
                }
            }
        }
    }        
}
?>