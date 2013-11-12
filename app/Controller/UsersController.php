<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->User->find('all'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->User->contain(
                array(
                    'Group',
                    'PersonalDetail' => array('Nationality','Country','Province','City','MaritalStatus'),
                    'ContactDetail' => array('Country','Province','City'),
                    'EducationDetail' => array('Course','Level', 'Country')
                )
        );
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('user', $this->User->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }

        $groups = $this->User->Group->find('list');
        $this->set(compact('groups'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function login() {
        $this->layout = 'login';
        if ($this->Session->read('Auth.User')) {
            $this->Session->setFlash('You are logged in!');
            return $this->redirect('/');
        }
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect());
            }
            $this->Session->setFlash(__('Your username or password was incorrect.'));
        }
    }

    public function logout() {
        //Leave empty for now.
        $this->Session->setFlash('Good-Bye');
        $this->redirect($this->Auth->logout());
    }

    public function beforeFilter() {
        parent::beforeFilter();

        // For CakePHP 2.0
        $this->Auth->allow('logout', 'add');

        // For CakePHP 2.1 and up
//        $this->Auth->allow();
    }

    public function changePassword($id) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }

        if ($this->Session->read('Auth.User.group_id') != 2) {
            if ($this->Session->read('Auth.User.id') != $id) {
                $this->Session->setFlash(__('Tentativa de Fraude'), 'default', array('class' => 'alert_error'));
                return $this->redirect(array('controller' => 'citizens', 'action' => 'index'));
            }
        }

        if ($this->request->is('post')) {
            $this->request->data['User']['id'] = $id;
            /*
             * the beforeSave method will encrypt the password
             */
            //$this->request->data['User']['password'] = $this->request->data['User']['new_password'];
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('A palavra-passe foi alterada.'), 'default', array('class' => 'alert_success'));
                return $this->redirect(array('action' => 'view', $id));
            } else {
                $this->Session->setFlash(__('Erro ao alterar a palavra-passe.'), 'default', array('class' => 'alert_error'));
            }
        }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('user', $this->User->find('first', $options));
    }

    public function selectUserRole() {

        if ($this->request->is('post')) {
            if (!isset($this->request->data['User']['group_id'])) {
                $this->User->invalidate('group_id');
            } else {
                $group_id = $this->request->data['User']['group_id'];
                switch ($group_id) {
                    case 1:
                        return $this->redirect(array('controller' => 'users', 'action' => 'add'));
                    case 2:
                        return $this->redirect(array('controller' => 'consumers', 'action' => 'add'));
                    case 3:
                        return $this->redirect(array('controller' => 'managers', 'action' => 'add'));
                    case 4:
                        return $this->redirect(array('controller' => 'operators', 'action' => 'add'));
                    default:
                        break;
                }
            }
        } else {
            $this->set('groups', $this->User->Group->find('list'));
        }
    }

}
