<?php
/* Leads Test cases generated on: 2012-05-26 19:55:10 : 1338072910*/
App::import('Controller', 'Leads');

class TestLeadsController extends LeadsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LeadsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.lead');

	function startTest() {
		$this->Leads =& new TestLeadsController();
		$this->Leads->constructClasses();
	}

	function endTest() {
		unset($this->Leads);
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
