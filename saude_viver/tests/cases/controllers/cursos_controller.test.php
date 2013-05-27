<?php
/* Cursos Test cases generated on: 2012-02-14 18:47:47 : 1329252467*/
App::import('Controller', 'Cursos');

class TestCursosController extends CursosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CursosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.curso');

	function startTest() {
		$this->Cursos =& new TestCursosController();
		$this->Cursos->constructClasses();
	}

	function endTest() {
		unset($this->Cursos);
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
