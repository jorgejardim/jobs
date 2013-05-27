<?php
/* Receita Test cases generated on: 2012-02-14 18:56:58 : 1329253018*/
App::import('Model', 'Receita');

class ReceitaTestCase extends CakeTestCase {
	var $fixtures = array('app.receita');

	function startTest() {
		$this->Receita =& ClassRegistry::init('Receita');
	}

	function endTest() {
		unset($this->Receita);
		ClassRegistry::flush();
	}

}
