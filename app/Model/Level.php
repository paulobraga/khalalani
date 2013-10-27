<?php
App::uses('AppModel', 'Model');
/**
 * Level Model
 *
 * @property EducationDetail $EducationDetail
 */
class Level extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'EducationDetail' => array(
			'className' => 'EducationDetail',
			'foreignKey' => 'level_id',
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
