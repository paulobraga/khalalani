<?php

App::uses('AppModel', 'Model');

/**
 * PersonalDetail Model
 *
 * @property MaritalStatus $MaritalStatus
 * @property Nationality $Nationality
 * @property Country $Country
 * @property Province $Province
 * @property City $City
 * @property User $User
 */
class PersonalDetail extends AppModel {

    public $virtualFields = array(
        'name' => 'CONCAT(PersonalDetail.first_name, " ", PersonalDetail.last_name)',
        'full_name' => 'CONCAT(PersonalDetail.first_name, " ", PersonalDetail.middle_name," ",PersonalDetail.last_name)'
    );


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'MaritalStatus' => array(
            'className' => 'MaritalStatus',
            'foreignKey' => 'marital_status_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Nationality' => array(
            'className' => 'Nationality',
            'foreignKey' => 'nationality_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Country' => array(
            'className' => 'Country',
            'foreignKey' => 'country_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Province' => array(
            'className' => 'Province',
            'foreignKey' => 'province_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'City' => array(
            'className' => 'City',
            'foreignKey' => 'city_id',
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

}
