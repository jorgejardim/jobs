<?php
/* QuestionsAnswers Test cases generated on: 2013-05-14 22:51:57 : 1368582717*/
App::import('Controller', 'QuestionsAnswers');

class TestQuestionsAnswersController extends QuestionsAnswersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class QuestionsAnswersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.questions_answer', 'app.user', 'app.group', 'app.questionnaire', 'app.question', 'app.questions_alternative');

	function startTest() {
		$this->QuestionsAnswers =& new TestQuestionsAnswersController();
		$this->QuestionsAnswers->constructClasses();
	}

	function endTest() {
		unset($this->QuestionsAnswers);
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
