<?php
/* Conteudos Test cases generated on: 2012-02-13 22:38:05 : 1329179885*/
App::import('Controller', 'Conteudos');

class TestConteudosController extends ConteudosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ConteudosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.conteudo');

	function startTest() {
		$this->Conteudos =& new TestConteudosController();
		$this->Conteudos->constructClasses();
	}

	function endTest() {
		unset($this->Conteudos);
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
