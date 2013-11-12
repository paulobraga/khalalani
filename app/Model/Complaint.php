<?php

App::uses('AppModel', 'Model');

/**
 * Complaint Model
 *
 * @property Company $Company
 * @property Consumer $Consumer
 * @property ComplaintCategory $ComplaintCategory
 * @property ComplaintComment $ComplaintComment
 * @property ComplaintLike $ComplaintLike
 */
class Complaint extends AppModel {

    public $virtualFields = array(
        'status_description' => 'CASE Complaint.status WHEN 1 THEN "pending" WHEN 0 THEN "closed" END',
        'status_color' => 'CASE Complaint.status WHEN 1 THEN "orange" WHEN 0 THEN "green" END'
    );
    public $actsAs = array('Containable');

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
            'order' => '',
            'counterCache'=>true
        ),
        'Consumer' => array(
            'className' => 'Consumer',
            'foreignKey' => 'consumer_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'ComplaintCategory' => array(
            'className' => 'ComplaintCategory',
            'foreignKey' => 'complaint_category_id',
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
        'ComplaintComment' => array(
            'className' => 'ComplaintComment',
            'foreignKey' => 'complaint_id',
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
            'foreignKey' => 'complaint_id',
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
