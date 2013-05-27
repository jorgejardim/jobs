<?php
/* Inscricao Fixture generated on: 2012-05-26 19:47:17 : 1338072437 */
class InscricaoFixture extends CakeTestFixture {
	var $name = 'Inscricao';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'id_proprio' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'curso_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'valor' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tipo_pagamento' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nome' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'telefone' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'profissao' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'como_soube' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cep' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'endereco' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'numero' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'complemento' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'bairro' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cidade' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'estado' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'url' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 'Lorem ipsum dolor sit amet',
			'id_proprio' => 'Lorem ipsum dolor sit amet',
			'curso_id' => 1,
			'status' => 1,
			'valor' => 'Lorem ip',
			'tipo_pagamento' => 'Lorem ipsum dolor sit amet',
			'nome' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'telefone' => 'Lorem ipsum dolor ',
			'profissao' => 'Lorem ipsum dolor sit amet',
			'como_soube' => 'Lorem ipsum dolor sit amet',
			'cep' => 'Lorem ip',
			'endereco' => 'Lorem ipsum dolor sit amet',
			'numero' => 'Lorem ipsum dolor sit amet',
			'complemento' => 'Lorem ipsum dolor sit amet',
			'bairro' => 'Lorem ipsum dolor sit amet',
			'cidade' => 'Lorem ipsum dolor sit amet',
			'estado' => '',
			'url' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-05-26 19:47:17',
			'modified' => '2012-05-26 19:47:17'
		),
	);
}
