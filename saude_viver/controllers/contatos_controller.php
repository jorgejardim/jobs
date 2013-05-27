<?php
class ContatosController extends AppController {

	var $name = 'Contatos';

	function admin_index() {
                
                if(isset($this->data['filtrar'])) {
                    $this->Session->write('contato.trecho', @$this->data['trecho']);
                }
                $conditions = false;
                if($this->Session->read('contato.trecho')) {
                    $conditions['OR'] = array(
                        'Contato.nome LIKE' => '%'.$this->Session->read('contato.trecho').'%',
                        'Contato.email LIKE' => '%'.$this->Session->read('contato.trecho').'%',
                        'Contato.telefone LIKE' => '%'.$this->Session->read('contato.trecho').'%',
                        'Contato.celular LIKE' => '%'.$this->Session->read('contato.trecho').'%',
                        'Contato.assunto LIKE' => '%'.$this->Session->read('contato.trecho').'%');
                    $this->data['trecho'] = $this->Session->read('contato.trecho');
                } 
                
		$this->Contato->recursive = 0;
                $this->paginate['order'] = array('Contato.created DESC');
		$this->set('contatos', $this->paginate('Contato', $conditions));
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid contato', true));
			$this->redirect(array('action' => 'index', '/'));
		}
		$this->set('contato', $this->Contato->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Contato->create();
			if ($this->Contato->save($this->data)) {
				$this->Session->setFlash(__('The contato has been saved', true));
				$this->redirect(array('action' => 'index', '/'));
			} else {
				$this->Session->setFlash(__('The contato could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid contato', true));
			$this->redirect(array('action' => 'index', '/'));
		}
		if (!empty($this->data)) {
			if ($this->Contato->save($this->data)) {
				$this->Session->setFlash(__('The contato has been saved', true));
				$this->redirect(array('action' => 'index', '/'));
			} else {
				$this->Session->setFlash(__('The contato could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Contato->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for contato', true));
			$this->redirect(array('action'=>'index', '/'));
		}
		if ($this->Contato->delete($id)) {
			$this->Session->setFlash(__('Contato deleted', true));
			$this->redirect(array('action'=>'index', '/'));
		}
		$this->Session->setFlash(__('Contato was not deleted', true));
		$this->redirect(array('action' => 'index', '/'));
	}
}
