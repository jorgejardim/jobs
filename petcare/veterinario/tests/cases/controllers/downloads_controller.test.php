<?php
/* Downloads Test cases generated on: 2013-05-14 22:27:25 : 1368581245*/
App::import('Controller', 'Downloads');

class TestDownloadsController extends DownloadsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DownloadsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.download');

	function startTest() {
		$this->Downloads =& new TestDownloadsController();
		$this->Downloads->constructClasses();
	}

	function endTest() {
		unset($this->Downloads);
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
