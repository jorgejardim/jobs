<?php
class MidiasController extends AppController {

	var $name = 'Midias';

	function admin_index() {
		$this->Midia->recursive = 0;
		$this->set('midias', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid midia', true));
			$this->redirect(array('action' => 'index', '/'));
		}
		$this->set('midia', $this->Midia->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Midia->create();
                        $this->data['Midia']['url']   = $this->Commons->limpa_url($this->data['Midia']['titulo']);
			if ($this->Midia->save($this->data)) {
				$this->Session->setFlash(__('The midia has been saved', true));
				$this->redirect(array('action' => 'index', '/'));
			} else {
				$this->Session->setFlash(__('The midia could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid midia', true));
			$this->redirect(array('action' => 'index', '/'));
		}
		if (!empty($this->data)) {
			$this->data['Midia']['url']   = $this->Commons->limpa_url($this->data['Midia']['titulo']);
                        if ($this->Midia->save($this->data)) {
				$this->Session->setFlash(__('The midia has been saved', true));
				$this->redirect(array('action' => 'index', '/'));
			} else {
				$this->Session->setFlash(__('The midia could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Midia->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for midia', true));
			$this->redirect(array('action'=>'index', '/'));
		}
		if ($this->Midia->delete($id)) {
			$this->Session->setFlash(__('Midia deleted', true));
			$this->redirect(array('action'=>'index', '/'));
		}
		$this->Session->setFlash(__('Midia was not deleted', true));
		$this->redirect(array('action' => 'index', '/'));
	}
}
