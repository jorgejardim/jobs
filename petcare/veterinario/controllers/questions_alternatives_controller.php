<?php
class QuestionsAlternativesController extends AppController {

	var $name = 'QuestionsAlternatives';

	function admin_index() {
		$this->QuestionsAlternative->recursive = 0;
		$this->set('questionsAlternatives', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid questions alternative', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('questionsAlternative', $this->QuestionsAlternative->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->QuestionsAlternative->create();
			if ($this->QuestionsAlternative->save($this->data)) {
				$this->Session->setFlash(__('The', true).' '.__('Questions Alternative', true).' '.__('has been saved.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The', true).' '.__('Questions Alternative', true).' '.__('could not be saved. Please, try again.', true));
			}
		}
		$questionnaires = $this->QuestionsAlternative->Questionnaire->find('list');
		$questions = $this->QuestionsAlternative->Question->find('list');
		$this->set(compact('questionnaires', 'questions'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid', true).' '.__('questions alternative', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->QuestionsAlternative->save($this->data)) {
				$this->Session->setFlash(__('The', true).' '.__('Questions Alternative', true).' '.__('has been saved.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The', true).' '.__('Questions Alternative', true).' '.__('could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->QuestionsAlternative->read(null, $id);
		}
		$questionnaires = $this->QuestionsAlternative->Questionnaire->find('list');
		$questions = $this->QuestionsAlternative->Question->find('list');
		$this->set(compact('questionnaires', 'questions'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for', true).' '.__('questions alternative', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->QuestionsAlternative->delete($id)) {
			$this->Session->setFlash(__('Questions alternative', true).' '.__('deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Questions alternative', true).' '.__('was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
