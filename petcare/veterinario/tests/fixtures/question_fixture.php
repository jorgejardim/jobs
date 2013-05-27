<?php
/* Question Fixture generated on: 2013-05-14 22:30:04 : 1368581404 */
class QuestionFixture extends CakeTestFixture {
	var $name = 'Question';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'questionnaire_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'question' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'order' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 1),
		'type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'questionnaire_id' => 1,
			'question' => 'Lorem ipsum dolor sit amet',
			'order' => 1,
			'type' => 'Lorem ipsum dolor ',
			'created' => '2013-05-14 22:30:04'
		),
	);
}
