<?php
class InscriptionsController extends AppController {

	var $name = 'Inscriptions';

	function admin_index($id = null) {
		$this->Inscription->recursive = 0;
		if($id) {
		    $this->paginate = array(
			'conditions' => array('Inscription.event_id' => $id),
			'limit' => 100,
			'group' => 'Inscription.user_id'
		    );
		}
		$this->set('inscriptions', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid inscription', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('inscription', $this->Inscription->read(null, $id));
	}
	
	function add($id = null) {
		if (!empty($this->data)) {
			$this->Inscription->create();
			$this->data['Inscription']['user_id'] = $this->Session->read('Auth.User.id');
			if ($this->Inscription->save($this->data)) {
			
				$inscricao = $this->Inscription->read(null, $this->Inscription->id);
				$event     = $this->Inscription->Event->read(null, $this->data['Inscription']['event_id']);
                
				$this->Email->to = EMAIL_TO; //CORE.PHP
				$this->Email->cc = array($this->Session->read('Auth.User.email'));
				$this->Email->subject = 'Nova Inscrição';
				$this->Email->template = 'inscricao'; 
				$this->set('id', $this->Session->read('Auth.User.id'));
				$this->set('name', $this->Session->read('Auth.User.name'));
				$this->set('email', $this->Session->read('Auth.User.email'));
				$this->set('evento', $event['Event']['name']);
				$this->set('date', $this->Commons->data_brasileira($inscricao['Inscription']['created']));
				$this->Email->send();  

				$this->Session->setFlash('Instrição realizada com sucesso.');
				$this->redirect(array('controller' => 'events', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The', true).' '.__('Inscription', true).' '.__('could not be saved. Please, try again.', true));
			}
		}
		$event = $this->Inscription->Event->read(null, $id);
		$this->set('event', $event);	
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
