<?php
class QuestionsAnswersController extends AppController {

	var $name = 'QuestionsAnswers';

	function admin_index() {
		$this->QuestionsAnswer->recursive = 0;
		$this->set('questionsAnswers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid questions answer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('questionsAnswer', $this->QuestionsAnswer->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->QuestionsAnswer->create();
			if ($this->QuestionsAnswer->save($this->data)) {
				$this->Session->setFlash(__('The', true).' '.__('Questions Answer', true).' '.__('has been saved.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The', true).' '.__('Questions Answer', true).' '.__('could not be saved. Please, try again.', true));
			}
		}
		$users = $this->QuestionsAnswer->User->find('list');
		$questionnaires = $this->QuestionsAnswer->Questionnaire->find('list');
		$questions = $this->QuestionsAnswer->Question->find('list');
		$questionsAlternatives = $this->QuestionsAnswer->QuestionsAlternative->find('list');
		$this->set(compact('users', 'questionnaires', 'questions', 'questionsAlternatives'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid', true).' '.__('questions answer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->QuestionsAnswer->save($this->data)) {
				$this->Session->setFlash(__('The', true).' '.__('Questions Answer', true).' '.__('has been saved.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The', true).' '.__('Questions Answer', true).' '.__('could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->QuestionsAnswer->read(null, $id);
		}
		$users = $this->QuestionsAnswer->User->find('list');
		$questionnaires = $this->QuestionsAnswer->Questionnaire->find('list');
		$questions = $this->QuestionsAnswer->Question->find('list');
		$questionsAlternatives = $this->QuestionsAnswer->QuestionsAlternative->find('list');
		$this->set(compact('users', 'questionnaires', 'questions', 'questionsAlternatives'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for', true).' '.__('questions answer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->QuestionsAnswer->delete($id)) {
			$this->Session->setFlash(__('Questions answer', true).' '.__('deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Questions answer', true).' '.__('was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
