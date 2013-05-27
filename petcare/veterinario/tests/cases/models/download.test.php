<?php
/* Download Test cases generated on: 2013-05-14 22:27:14 : 1368581234*/
App::import('Model', 'Download');

class DownloadTestCase extends CakeTestCase {
	var $fixtures = array('app.download');

	function startTest() {
		$this->Download =& ClassRegistry::init('Download');
	}

	function endTest() {
		unset($this->Download);
		ClassRegistry::flush();
	}

}
