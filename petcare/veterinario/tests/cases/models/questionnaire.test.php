<?php
/* Questionnaire Test cases generated on: 2013-05-14 22:29:49 : 1368581389*/
App::import('Model', 'Questionnaire');

class QuestionnaireTestCase extends CakeTestCase {
	var $fixtures = array('app.questionnaire', 'app.question', 'app.questions_alternative', 'app.questions_answer');

	function startTest() {
		$this->Questionnaire =& ClassRegistry::init('Questionnaire');
	}

	function endTest() {
		unset($this->Questionnaire);
		ClassRegistry::flush();
	}

}
