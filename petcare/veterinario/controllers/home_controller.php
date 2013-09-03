<?php
class HomeController extends AppController {

    /**
    * This controller does not use a model
    *
    * @var array
    * @access public
    */
    var $uses = array();

    /**
    * Index
    *
    * @param mixed What page to display
    * @access public
    */
    function index() {
		
    	if(GROUP_REFERENCE == 'usuario') {
    		
    		$this->loadModel('Event');    		
    		$this->Event->recursive = 0;    		
    		$this->paginate['limit'] = 5;
    		$this->paginate['order'] = array('Event.date DESC');
    		$events = $this->paginate('Event');
    		$this->set('events', $events);  
    		
    	} else {
    		
    		$this->loadModel('Inscription');
    		$this->Inscription->recursive = 0;
    		$this->paginate['limit'] = 20;
    		$this->paginate['order'] = array('Inscription.created DESC');
    		$inscriptions = $this->paginate('Inscription');
    		$this->set('inscriptions', $inscriptions);
    	}
    }
}