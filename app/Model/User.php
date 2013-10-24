<?php

App::uses('AppModel', 'Model');

/**
 * User Model
 *
 * @property ComplaintsComment $ComplaintsComment
 * @property Manager $Manager
 * @property Operator $Operator
 */
class User extends AppModel {

    public function bindNode($user) {
        return array('model' => 'Group', 'foreign_key' => $user['User']['group_id']);
    }

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'ComplaintsComment' => array(
            'className' => 'ComplaintsComment',
            'foreignKey' => 'user_id',
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
            'foreignKey' => 'user_id',
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
            'foreignKey' => 'user_id',
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
    public $belongsTo = array(
        'Group' => array(
            'className' => 'Group',
            'foreignKey' => 'group_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    public $validate = array(
        'username' => array(
            'isunique' => array('rule' => 'isUnique', 'message' => 'este username já foi registado'),
            'notempty' => array('rule' => 'notempty', 'message' => 'please enter a username')
        ),
        'password' => array(
            'Not empty' => array(
                'rule' => 'notEmpty', 'message' => 'porfavor, introduza a palavra-passe'
            ),
            'Match passwords' => array(
                'rule' => 'matchPasswords',
                'message' => 'as palavras-passe são diferentes'
            )
        ),
        'password_confirmation' => array(
            'Not empty' => array(
                'rule' => 'notEmpty', 'message' => 'porfavor, confirme a nova palavra-passe'
            )
        ),
        'current_password' => array(
            'notempty' => array('rule' => 'notEmpty', 'message' => 'porfavor, introduza a palavra-passe actual'),
            'check password' => array('rule' => 'checkPassword',
                'message' => 'your password is not correct')
        )
    );

    public function matchPasswords($data) {
        if(isset($this->data['User']['password_confirmation'])){
        if ($data['password'] == $this->data['User']['password_confirmation'])
            return true;
        $this->invalidate('password_confirmation', 'as palavras-passe são diferentes');
        return false;
        }
    }

    public function checkPassword($data) {
        $user1 = new User();
        $user = $user1->read(null, $this->data['User']['id']);
        $current_password = AuthComponent::password($data['current_password']);
        if ($current_password == $user['User']['password']) {
            return true;
        }
        return false;
    }

    public function beforeSave($options = array()) {
        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        return true;
    }

}
