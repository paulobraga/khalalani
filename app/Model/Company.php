<?php

App::uses('AppModel', 'Model');

/**
 * Company Model
 *
 * @property Branch $Branch
 * @property ComplaintCategory $ComplaintCategory
 * @property Complaint $Complaint
 * @property Manager $Manager
 * @property Operator $Operator
 * @property Category $Category
 */
class Company extends AppModel {

    public $actsAs = array(
        'Upload.Upload' => array(
            'logo' => array(
                'fields' => array(
                    'dir' => 'logo_dir'
                ),
                'thumbnailMethod' => 'php'
            )
        )
    );


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Branch' => array(
            'className' => 'Branch',
            'foreignKey' => 'company_id',
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
        'ComplaintCategory' => array(
            'className' => 'ComplaintCategory',
            'foreignKey' => 'company_id',
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
            'foreignKey' => 'company_id',
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
        'Manager' => array(
            'className' => 'Manager',
            'foreignKey' => 'company_id',
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
        'Operator' => array(
            'className' => 'Operator',
            'foreignKey' => 'company_id',
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

    /**
     * hasAndBelongsToMany associations
     *
     * @var array
     */
    public $hasAndBelongsToMany = array(
        'Category' => array(
            'className' => 'Category',
            'joinTable' => 'companies_categories',
            'foreignKey' => 'company_id',
            'associationForeignKey' => 'category_id',
            'unique' => 'keepExisting',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
            'deleteQuery' => '',
            'insertQuery' => ''
        )
    );

    public function beforeSave($options = array()) {
        parent::beforeSave($options);
    }

}
