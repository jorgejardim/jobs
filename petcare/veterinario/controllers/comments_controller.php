<?php

class CommentsController extends AppController {

    var $name = 'Comments';

    function admin_index() {
        $this->Comment->recursive = 0;
        $this->set('comments', $this->paginate());
    }

    function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid comment', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('comment', $this->Comment->read(null, $id));
    }
    
    function add() {
	$this->admin_add();
    }

    function admin_add() {
        if (!empty($this->data)) {
            $this->data['Comment']['user_id'] = USER_ID;
            $this->Comment->create();
            if ($this->Comment->save($this->data)) {
                
                $comentario = $this->Comment->read(null, $this->Comment->id);
                
                $this->Email->to = EMAIL_TO; //CORE.PHP
                $this->Email->subject = 'Novo Comentário';
                $this->Email->template = 'comentarios'; 
                $this->set('id', $comentario['User']['id']);
                $this->set('name', $comentario['User']['name']);
                $this->set('email', $comentario['User']['email']);
                $this->set('comment', $comentario['Comment']['comment']);
                $this->set('date', $this->Commons->data_brasileira($comentario['Comment']['created']));
                $this->Email->send();                
                
                $this->Session->setFlash('Comentário enviado com sucesso.');
                $this->redirect(array('action' => 'add'));
            } else {
                $this->Session->setFlash(__('The', true) . ' ' . __('Comment', true) . ' ' . __('could not be saved. Please, try again.', true));
            }
        }
        $users = $this->Comment->User->find('list');
        $this->set(compact('users'));
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid', true) . ' ' . __('comment', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            $this->data['Comment']['user_id'] = USER_ID;
            if ($this->Comment->save($this->data)) {
                $this->Session->setFlash(__('The', true) . ' ' . __('Comment', true) . ' ' . __('has been saved.', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The', true) . ' ' . __('Comment', true) . ' ' . __('could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Comment->read(null, $id);
        }
        $users = $this->Comment->User->find('list');
        $this->set(compact('users'));
    }

    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for', true) . ' ' . __('comment', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Comment->delete($id)) {
            $this->Session->setFlash(__('Comment', true) . ' ' . __('deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Comment', true) . ' ' . __('was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

}
