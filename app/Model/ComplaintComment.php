<?php
App::uses('AppModel', 'Model');
/**
 * ComplaintComment Model
 *
 * @property User $User
 * @property Complaint $Complaint
 */
class ComplaintComment extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Complaint' => array(
			'className' => 'Complaint',
			'foreignKey' => 'complaint_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
