<?php
/* Inscricao Test cases generated on: 2012-05-26 19:47:17 : 1338072437*/
App::import('Model', 'Inscricao');

class InscricaoTestCase extends CakeTestCase {
	var $fixtures = array('app.inscricao', 'app.curso');

	function startTest() {
		$this->Inscricao =& ClassRegistry::init('Inscricao');
	}

	function endTest() {
		unset($this->Inscricao);
		ClassRegistry::flush();
	}

}
