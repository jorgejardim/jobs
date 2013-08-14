<?php

class EventsController extends AppController {

    var $name = 'Events';
    
    function index() {
	$this->admin_index();
    }

    function admin_index() {
    
        $this->Event->recursive = 0;
        $events = $this->paginate();
        
        foreach($events as $k => $v) {
	    
	    $inscricoes = $this->Event->Inscription->query("SELECT * 
							     FROM `inscriptions` AS `Inscription` 
							     WHERE `Inscription`.`event_id` = ".$events[$k]['Event']['id']." 
							     GROUP BY `Inscription`.`user_id`");
			     
	    $events[$k]['Event']['inscricoes'] = count($inscricoes);
        }
        
        $this->set('events', $events);
    }

    function view($id = null) {
	$this->admin_view($id);
    }
    
    function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid event', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('event', $this->Event->read(null, $id));
    }

    function admin_add() {
        if (!empty($this->data)) {
            $this->data['Event']['date'] = $this->Commons->data_americana($this->data['Event']['date']);
            $this->data['Event']['date_limit'] = $this->Commons->data_americana($this->data['Event']['date_limit']);
            $this->Event->create();
            if ($this->Event->save($this->data)) {
                $this->Session->setFlash(__('The', true) . ' ' . __('Event', true) . ' ' . __('has been saved.', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The', true) . ' ' . __('Event', true) . ' ' . __('could not be saved. Please, try again.', true));
            }
        }
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid', true) . ' ' . __('event', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            $this->data['Event']['date'] = $this->Commons->data_americana($this->data['Event']['date']);
            $this->data['Event']['date_limit'] = $this->Commons->data_americana($this->data['Event']['date_limit']);
            if ($this->Event->save($this->data)) {
                $this->Session->setFlash(__('The', true) . ' ' . __('Event', true) . ' ' . __('has been saved.', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The', true) . ' ' . __('Event', true) . ' ' . __('could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Event->read(null, $id);
            $this->data['Event']['date'] = $this->Commons->data_brasileira($this->data['Event']['date']);
            $this->data['Event']['date_limit'] = $this->Commons->data_brasileira($this->data['Event']['date_limit']);
            $this->data['Event']['time'] = substr($this->data['Event']['time'],0,5);
        }
    }

    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for', true) . ' ' . __('event', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Event->delete($id)) {
            $this->Session->setFlash(__('Event', true) . ' ' . __('deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Event', true) . ' ' . __('was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

}
