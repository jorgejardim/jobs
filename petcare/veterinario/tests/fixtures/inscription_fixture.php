<?php
/* Inscription Fixture generated on: 2013-05-14 22:28:58 : 1368581338 */
class InscriptionFixture extends CakeTestFixture {
	var $name = 'Inscription';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'how_did' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'comment' => 'Como soube do evento?', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'event_id' => array('column' => 'event_id', 'unique' => 0), 'user_id' => array('column' => 'user_id', 'unique' => 0), 'user_id_2' => array('column' => 'user_id', 'unique' => 0), 'user_id_3' => array('column' => 'user_id', 'unique' => 0), 'user_id_4' => array('column' => 'user_id', 'unique' => 0), 'user_id_5' => array('column' => 'user_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'event_id' => 1,
			'user_id' => 1,
			'how_did' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-05-14 22:28:58'
		),
	);
}
