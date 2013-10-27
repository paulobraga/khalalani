<?php
App::uses('AppModel', 'Model');
/**
 * ComplaintLike Model
 *
 * @property Complaint $Complaint
 * @property Consumer $Consumer
 */
class ComplaintLike extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Complaint' => array(
			'className' => 'Complaint',
			'foreignKey' => 'complaint_id',
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
