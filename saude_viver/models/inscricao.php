<?php
class Inscricao extends AppModel {
	var $name = 'Inscricao';
        var $useTable = 'inscricoes';
        
	var $belongsTo = array(
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
