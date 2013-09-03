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
    		$events = $this->paginate();    		
    		$this->set('events', $events);    		
    		
    	} else {
    		
    	}
    }
}