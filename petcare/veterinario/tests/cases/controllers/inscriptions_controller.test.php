<?php
/* Inscriptions Test cases generated on: 2013-05-14 22:29:09 : 1368581349*/
App::import('Controller', 'Inscriptions');

class TestInscriptionsController extends InscriptionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class InscriptionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.inscription', 'app.event', 'app.user', 'app.group');

	function startTest() {
		$this->Inscriptions =& new TestInscriptionsController();
		$this->Inscriptions->constructClasses();
	}

	function endTest() {
		unset($this->Inscriptions);
		ClassRegistry::flush();
	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
