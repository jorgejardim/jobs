<?php
/* Inscricoes Test cases generated on: 2012-05-26 19:49:43 : 1338072583*/
App::import('Controller', 'Inscricoes');

class TestInscricoesController extends InscricoesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class InscricoesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.inscricao', 'app.curso');

	function startTest() {
		$this->Inscricoes =& new TestInscricoesController();
		$this->Inscricoes->constructClasses();
	}

	function endTest() {
		unset($this->Inscricoes);
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
