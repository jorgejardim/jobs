<?php
/* Receitas Test cases generated on: 2012-02-14 18:57:08 : 1329253028*/
App::import('Controller', 'Receitas');

class TestReceitasController extends ReceitasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ReceitasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.receita');

	function startTest() {
		$this->Receitas =& new TestReceitasController();
		$this->Receitas->constructClasses();
	}

	function endTest() {
		unset($this->Receitas);
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
