<?php
/* QuestionsAnswer Fixture generated on: 2013-05-14 22:46:31 : 1368582391 */
class QuestionsAnswerFixture extends CakeTestFixture {
	var $name = 'QuestionsAnswer';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'questionnaire_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'question_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'questions_alternative_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'answer' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'questionnaire_id' => 1,
			'question_id' => 1,
			'questions_alternative_id' => 1,
			'answer' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2013-05-14 22:46:31'
		),
	);
}
