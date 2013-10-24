<?php
App::uses('AppModel', 'Model');
/**
 * Nationality Model
 *
 * @property Consumer $Consumer
 */
class Nationality extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Consumer' => array(
			'className' => 'Consumer',
			'foreignKey' => 'nationality_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
