<?php
class QuestionnairesController extends AppController {

	var $name = 'Questionnaires';

	function admin_index() {
		$this->Questionnaire->recursive = 0;
		$this->set('questionnaires', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid questionnaire', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('questionnaire', $this->Questionnaire->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Questionnaire->create();
			if ($this->Questionnaire->save($this->data)) {
				$this->Session->setFlash(__('The', true).' '.__('Questionnaire', true).' '.__('has been saved.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The', true).' '.__('Questionnaire', true).' '.__('could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid', true).' '.__('questionnaire', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Questionnaire->save($this->data)) {
				$this->Session->setFlash(__('The', true).' '.__('Questionnaire', true).' '.__('has been saved.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The', true).' '.__('Questionnaire', true).' '.__('could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Questionnaire->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for', true).' '.__('questionnaire', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Questionnaire->delete($id)) {
			$this->Session->setFlash(__('Questionnaire', true).' '.__('deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Questionnaire', true).' '.__('was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
