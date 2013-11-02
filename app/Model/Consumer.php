<?php

App::uses('AppModel', 'Model');

/**
 * Consumer Model
 *
 * @property User $User
 * @property CompanyLike $CompanyLike
 * @property ComplaintLike $ComplaintLike
 * @property Complaint $Complaint
 */
class Consumer extends AppModel {

    public $actsAs = array('Containable');

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
        )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'CompanyLike' => array(
            'className' => 'CompanyLike',
            'foreignKey' => 'consumer_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'ComplaintLike' => array(
            'className' => 'ComplaintLike',
            'foreignKey' => 'consumer_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Complaint' => array(
            'className' => 'Complaint',
            'foreignKey' => 'consumer_id',
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
