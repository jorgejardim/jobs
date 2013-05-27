<?php
class LeadsController extends AppController {

	var $name = 'Leads';

	function admin_index() {
            
                if(isset($this->data['filtrar'])) {
                    $this->Session->write('lead.trecho', @$this->data['trecho']);
                }
                $conditions = false;
                if($this->Session->read('lead.trecho')) {
                    $conditions['OR'] = array(
                        'Lead.nome LIKE' => '%'.$this->Session->read('lead.trecho').'%',
                        'Lead.email LIKE' => '%'.$this->Session->read('lead.trecho').'%',
                        'Lead.interesse LIKE' => '%'.$this->Session->read('lead.trecho').'%');
                    $this->data['trecho'] = $this->Session->read('lead.trecho');
                } 
                
		$this->Lead->recursive = 0;
                $this->paginate['order'] = array('Lead.created DESC');
		$this->set('leads', $this->paginate('Lead', $conditions));
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid lead', true));
			$this->redirect(array('action' => 'index', '/'));
		}
		$this->set('lead', $this->Lead->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Lead->create();
			if ($this->Lead->save($this->data)) {
				$this->Session->setFlash(__('The lead has been saved', true));
				$this->redirect(array('action' => 'index', '/'));
			} else {
				$this->Session->setFlash(__('The lead could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid lead', true));
			$this->redirect(array('action' => 'index', '/'));
		}
		if (!empty($this->data)) {
			if ($this->Lead->save($this->data)) {
				$this->Session->setFlash(__('The lead has been saved', true));
				$this->redirect(array('action' => 'index', '/'));
			} else {
				$this->Session->setFlash(__('The lead could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Lead->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for lead', true));
			$this->redirect(array('action'=>'index', '/'));
		}
		if ($this->Lead->delete($id)) {
			$this->Session->setFlash(__('Lead deleted', true));
			$this->redirect(array('action'=>'index', '/'));
		}
		$this->Session->setFlash(__('Lead was not deleted', true));
		$this->redirect(array('action' => 'index', '/'));
	}
}
