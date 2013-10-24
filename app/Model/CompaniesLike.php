<?php
App::uses('AppModel', 'Model');
/**
 * CompaniesLike Model
 *
 * @property Company $Company
 * @property Consumer $Consumer
 */
class CompaniesLike extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'company_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Consumer' => array(
			'className' => 'Consumer',
			'foreignKey' => 'consumer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
