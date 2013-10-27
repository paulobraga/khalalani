<?php

App::uses('AppModel', 'Model');

/**
 * Consumer Model
 *
 * @property Nationality $Nationality
 * @property CompaniesLike $CompaniesLike
 * @property Complaint $Complaint
 * @property ComplaintsLike $ComplaintsLike
 */
class Consumer extends AppModel {
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Nationality' => array(
            'className' => 'Nationality',
            'foreignKey' => 'nationality_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
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
        'CompaniesLike' => array(
            'className' => 'CompaniesLike',
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
        ),
        'ComplaintsLike' => array(
            'className' => 'ComplaintsLike',
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
