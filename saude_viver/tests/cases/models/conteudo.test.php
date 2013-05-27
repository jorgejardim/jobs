<?php
/* Conteudo Test cases generated on: 2012-02-13 22:37:48 : 1329179868*/
App::import('Model', 'Conteudo');

class ConteudoTestCase extends CakeTestCase {
	var $fixtures = array('app.conteudo');

	function startTest() {
		$this->Conteudo =& ClassRegistry::init('Conteudo');
	}

	function endTest() {
		unset($this->Conteudo);
		ClassRegistry::flush();
	}

}
