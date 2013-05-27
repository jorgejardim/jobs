<?php
/* Curso Test cases generated on: 2012-02-14 18:47:29 : 1329252449*/
App::import('Model', 'Curso');

class CursoTestCase extends CakeTestCase {
	var $fixtures = array('app.curso');

	function startTest() {
		$this->Curso =& ClassRegistry::init('Curso');
	}

	function endTest() {
		unset($this->Curso);
		ClassRegistry::flush();
	}

}
