<?php
/* Contatos Test cases generated on: 2012-05-26 19:53:39 : 1338072819*/
App::import('Controller', 'Contatos');

class TestContatosController extends ContatosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ContatosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.contato');

	function startTest() {
		$this->Contatos =& new TestContatosController();
		$this->Contatos->constructClasses();
	}

	function endTest() {
		unset($this->Contatos);
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
