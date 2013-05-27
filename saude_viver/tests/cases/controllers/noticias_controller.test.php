<?php
/* Noticias Test cases generated on: 2012-02-14 19:05:38 : 1329253538*/
App::import('Controller', 'Noticias');

class TestNoticiasController extends NoticiasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class NoticiasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.noticia');

	function startTest() {
		$this->Noticias =& new TestNoticiasController();
		$this->Noticias->constructClasses();
	}

	function endTest() {
		unset($this->Noticias);
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
