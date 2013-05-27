<?php
class InscriptionsController extends AppController {

	var $name = 'Inscriptions';

	function admin_index() {
		$this->Inscription->recursive = 0;
		$this->set('inscriptions', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid inscription', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('inscription', $this->Inscription->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Inscription->create();
			if ($this->Inscription->save($this->data)) {
				$this->Session->setFlash(__('The', true).' '.__('Inscription', true).' '.__('has been saved.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The', true).' '.__('Inscription', true).' '.__('could not be saved. Please, try again.', true));
			}
		}
		$events = $this->Inscription->Event->find('list');
		$users = $this->Inscription->User->find('list');
		$this->set(compact('events', 'users'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid', true).' '.__('inscription', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Inscription->save($this->data)) {
				$this->Session->setFlash(__('The', true).' '.__('Inscription', true).' '.__('has been saved.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The', true).' '.__('Inscription', true).' '.__('could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Inscription->read(null, $id);
		}
		$events = $this->Inscription->Event->find('list');
		$users = $this->Inscription->User->find('list');
		$this->set(compact('events', 'users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for', true).' '.__('inscription', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Inscription->delete($id)) {
			$this->Session->setFlash(__('Inscription', true).' '.__('deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Inscription', true).' '.__('was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
