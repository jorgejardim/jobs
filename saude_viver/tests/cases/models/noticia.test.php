<?php
/* Noticia Test cases generated on: 2012-02-14 19:05:29 : 1329253529*/
App::import('Model', 'Noticia');

class NoticiaTestCase extends CakeTestCase {
	var $fixtures = array('app.noticia');

	function startTest() {
		$this->Noticia =& ClassRegistry::init('Noticia');
	}

	function endTest() {
		unset($this->Noticia);
		ClassRegistry::flush();
	}

}
