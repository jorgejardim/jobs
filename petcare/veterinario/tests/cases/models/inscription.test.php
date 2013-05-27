<?php
/* Inscription Test cases generated on: 2013-05-14 22:28:58 : 1368581338*/
App::import('Model', 'Inscription');

class InscriptionTestCase extends CakeTestCase {
	var $fixtures = array('app.inscription', 'app.event', 'app.user', 'app.group');

	function startTest() {
		$this->Inscription =& ClassRegistry::init('Inscription');
	}

	function endTest() {
		unset($this->Inscription);
		ClassRegistry::flush();
	}

}
