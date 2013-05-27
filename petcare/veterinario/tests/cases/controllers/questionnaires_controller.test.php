<?php
/* Questionnaires Test cases generated on: 2013-05-14 22:49:03 : 1368582543*/
App::import('Controller', 'Questionnaires');

class TestQuestionnairesController extends QuestionnairesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class QuestionnairesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.questionnaire');

	function startTest() {
		$this->Questionnaires =& new TestQuestionnairesController();
		$this->Questionnaires->constructClasses();
	}

	function endTest() {
		unset($this->Questionnaires);
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
