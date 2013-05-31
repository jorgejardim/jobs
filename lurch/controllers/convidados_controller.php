<?php

class ConvidadosController extends AppController {

    var $name = 'Convidados';

    function admin_index() {
        $this->Convidado->recursive = 0;
        $this->set('convidados', $this->paginate());
    }

    function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid convidado', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('convidado', $this->Convidado->read(null, $id));
        $this->_status();
    }

    function admin_add($evento_id = null) {
        if (!$evento_id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid convidado', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            $this->Convidado->create();
            if ($this->Convidado->save($this->data)) {
                $this->admin_email($this->Convidado->id, $this->data['Convidado']['evento_id'], false);
                $this->Session->setFlash('Convidado incluído com sucesso.');
                $this->redirect(array('action' => 'add', $this->data['Convidado']['evento_id']));
            } else {
                $this->Session->setFlash(__('The', true) . ' ' . __('Convidado', true) . ' ' . __('could not be saved. Please, try again.', true));
            }
        }
        $evento = $this->Convidado->Evento->read(null, $evento_id);
        $this->set(compact('evento'));
        $this->set('title_for_layout', 'Incluir Convidado');
        $this->data['Convidado']['evento_id'] = $evento_id;
        
        //lista
        $this->Convidado->recursive = 0;
        $convidados = $this->paginate();
        $this->set('convidados', $convidados);
        $this->_status();
    }

    function admin_edit($id = null, $evento_id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid', true) . ' ' . __('convidado', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Convidado->save($this->data)) {
                if(isset($this->data['Convidado']['confirmar'])) {
                    $this->redirect(array('action' => 'confirmado', $this->Convidado->id, $evento_id));
                } else {
                    $this->Session->setFlash('O Convidado foi salvo com sucesso.');
                    $this->redirect(array('action' => 'add', $this->data['Convidado']['evento_id']));
                }
            } else {
                $this->Session->setFlash(__('The', true) . ' ' . __('Convidado', true) . ' ' . __('could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Convidado->read(null, $id);
        }
        $eventos = $this->Convidado->Evento->find('list');
        $this->set(compact('eventos'));
    }

    function admin_delete($id = null, $evento_id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for', true) . ' ' . __('convidado', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Convidado->delete($id)) {
            $this->Session->setFlash(__('Convidado', true) . ' ' . __('deleted', true));
            $this->redirect(array('action' => 'add', $evento_id));
        }
        $this->Session->setFlash(__('Convidado', true) . ' ' . __('was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }
    
    function admin_email($id = null, $evento_id = null, $redirect = true) {
        
        $convidado = $this->Convidado->read(null, $id);
        $evento    = $this->Convidado->Evento->read(null, $evento_id);
        
        if(!empty($convidado['Convidado']['email']) && $evento['Evento']['status']==1) {
            
            $this->Email->to = $convidado['Convidado']['email'];
            $this->Email->subject = 'Convite';
            $this->Email->template = 'convite'; 
            $this->set('convidado', $convidado['Convidado']); 
            $this->set('evento', $evento['Evento']);
            $this->set('id', base64_encode($convidado['Convidado']['id']));
            $this->Email->send();

            if($redirect)
                $this->Session->setFlash('Convite enviado com sucesso.');
            
        } else {
            
            if($redirect)
                $this->Session->setFlash('Erro: O convidado não possui E-mail cadastrado ou o Evento não esta publicado.');
        }
        
        if($redirect)
            $this->redirect(array('action' => 'add', $evento_id));
    }
    
    function confirmar($id = null) {
        $id = base64_decode($id);
        $convidado = $this->Convidado->read(null, $id);
        $evento    = $this->Convidado->Evento->read(null, $convidado['Convidado']['evento_id']);
        $this->admin_edit($id, $evento['Evento']['id']);  
        
        $this->set('title_for_layout', 'Confirmar Presença');
        $this->set('convidado', $convidado);
        $this->set('evento', $evento);
    }
    
    function confirmado($id = null, $evento_id = null) {
        
        $this->loadModel('User');
        $convidado = $this->Convidado->read(null, $id);
        $evento    = $this->Convidado->Evento->read(null, $evento_id);
        $usuario   = $this->User->read(null, $evento['Evento']['user_id']);
        
        if(!empty($convidado['Convidado']['email']) && $evento['Evento']['status']==1) {
            
            $this->set('convidado', $convidado['Convidado']); 
            $this->set('evento', $evento['Evento']);
            
            $this->Email->to = $convidado['Convidado']['email'];
            $this->Email->subject = 'Confirmação de presença';
            $this->Email->template = 'confirmado_convidado'; 
            $this->Email->send();
            
            $this->Email->to = $usuario['User']['email'];
            $this->Email->subject = 'Nova confirmação de presença';
            $this->Email->template = 'confirmado_sistema'; 
            $this->Email->send();
        }
    }
    
    private function _status() {
        $status[0] = '<span style="color:#F90;" title="Aguardando Confirmação" class="tooltip">Aguardando</span>';
        $status[1] = '<span style="color:#06F;" title="Convidado Confirmado" class="tooltip">Confirmado</span>';
        $status[2] = '<span style="color:#F00;" title="Convidado não Confirmado" class="tooltip">Não Vai</span>';
        $this->set('status', $status);
    }
}
