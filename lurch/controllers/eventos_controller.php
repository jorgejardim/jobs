<?php

class EventosController extends AppController {

    var $name = 'Eventos';

    function admin_index() {
        $this->Evento->recursive = 0;
        $this->paginate['conditions']['Evento.user_id'] = USER_ID;
        $this->paginate['order'] = array('Evento.inicio');
        $eventos = $this->paginate();
        $this->set('eventos', $eventos);
        $this->set('title_for_layout', 'Meus Eventos');
        $this->_status();
    }

    function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid evento', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('evento', $this->Evento->read(null, $id));
        $this->_status();
    }

    function admin_add() {
        if (!empty($this->data)) {
            $this->data['Evento']['user_id'] = USER_ID;
            $this->data['Evento']['inicio']  = $this->Commons->data_americana($this->data['Evento']['inicio']);
            $this->data['Evento']['termino'] = $this->Commons->data_americana($this->data['Evento']['termino']);
            $this->Evento->create();
            if ($this->Evento->save($this->data)) {                
                $this->Session->setFlash('Evento criado com sucesso.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Erro ao salvar o Evento.');
            }
        }
        $users = $this->Evento->User->find('list');
        $this->set(compact('users'));
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid', true) . ' ' . __('evento', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            $this->data['Evento']['inicio']  = $this->Commons->data_americana($this->data['Evento']['inicio']);
            $this->data['Evento']['termino'] = $this->Commons->data_americana($this->data['Evento']['termino']);
            if ($this->Evento->save($this->data)) {
                $this->Session->setFlash('Evento salvo com sucesso.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Erro ao salvar o Evento.');
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Evento->read(null, $id);
            $this->data['Evento']['inicio'] = substr($this->Commons->data_brasileira($this->data['Evento']['inicio']), 0, 16);
            $this->data['Evento']['termino'] = substr($this->Commons->data_brasileira($this->data['Evento']['termino']), 0, 16);
        }
        $users = $this->Evento->User->find('list');
        $this->set(compact('users'));
    }

    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for', true) . ' ' . __('evento', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Evento->delete($id)) {
            $this->Session->setFlash(__('Evento', true) . ' ' . __('deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Evento', true) . ' ' . __('was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

    private function _status() {
        $status[0] = '<span style="color:#F00;">Cancelado</span>';
        $status[1] = '<span style="color:#06F;">Publicado</span>';
        $status[2] = '<span style="color:#F90;">Rascunho</span>';
        $this->set('status', $status);
    }

}
