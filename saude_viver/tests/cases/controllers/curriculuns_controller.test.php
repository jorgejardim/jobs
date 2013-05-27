<?php
/* Curriculuns Test cases generated on: 2012-05-26 19:53:06 : 1338072786*/
App::import('Controller', 'Curriculuns');

class TestCurriculunsController extends CurriculunsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CurriculunsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.curriculum');

	function startTest() {
		$this->Curriculuns =& new TestCurriculunsController();
		$this->Curriculuns->constructClasses();
	}

	function endTest() {
		unset($this->Curriculuns);
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
