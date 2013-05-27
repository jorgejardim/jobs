<?php
/* QuestionsAlternative Fixture generated on: 2013-05-14 22:30:22 : 1368581422 */
class QuestionsAlternativeFixture extends CakeTestFixture {
	var $name = 'QuestionsAlternative';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'questionnaire_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'question_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'alternative' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'order' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'questionnaire_id' => 1,
			'question_id' => 1,
			'alternative' => 'Lorem ipsum dolor sit amet',
			'order' => 1,
			'created' => '2013-05-14 22:30:22'
		),
	);
}
