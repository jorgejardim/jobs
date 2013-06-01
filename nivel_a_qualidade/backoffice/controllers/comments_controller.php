<?php

class CommentsController extends AppController {

    var $name = 'Comments';

    function admin_index() {
        $this->Comment->recursive = 0;
        $this->paginate['order'] = array('Comment.created DESC');
        $this->set('comments', $this->paginate());
    }

    function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid comment', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('comment', $this->Comment->read(null, $id));
    }

    function admin_add() {
        if (!empty($this->data)) {
            $this->Comment->create();
            if ($this->Comment->save($this->data)) {
                $this->Session->setFlash(__('The', true) . ' ' . __('Comment', true) . ' ' . __('has been saved.', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The', true) . ' ' . __('Comment', true) . ' ' . __('could not be saved. Please, try again.', true));
            }
        }
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid', true) . ' ' . __('comment', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
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
