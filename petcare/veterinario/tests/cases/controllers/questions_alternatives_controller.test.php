<?php
/* QuestionsAlternatives Test cases generated on: 2013-05-14 22:51:30 : 1368582690*/
App::import('Controller', 'QuestionsAlternatives');

class TestQuestionsAlternativesController extends QuestionsAlternativesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class QuestionsAlternativesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.questions_alternative', 'app.questionnaire', 'app.question');

	function startTest() {
		$this->QuestionsAlternatives =& new TestQuestionsAlternativesController();
		$this->QuestionsAlternatives->constructClasses();
	}

	function endTest() {
		unset($this->QuestionsAlternatives);
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
