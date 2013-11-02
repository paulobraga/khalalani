<?php

App::uses('AppModel', 'Model');

/**
 * CompanyLike Model
 *
 * @property Company $Company
 * @property Consumer $Consumer
 */
class CompanyLike extends AppModel {

    public $validate = array(
        'company_id' => array
            (
            'unique' => array
                (
                'rule' => array('checkUnique', array('company_id', 'consumer_id')),
                'message' => 'You already liked this company',
            )
        )
    );

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
