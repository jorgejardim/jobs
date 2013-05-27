<?php
/* Questions Test cases generated on: 2013-05-14 22:51:16 : 1368582676*/
App::import('Controller', 'Questions');

class TestQuestionsController extends QuestionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class QuestionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.question', 'app.questionnaire');

	function startTest() {
		$this->Questions =& new TestQuestionsController();
		$this->Questions->constructClasses();
	}

	function endTest() {
		unset($this->Questions);
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
