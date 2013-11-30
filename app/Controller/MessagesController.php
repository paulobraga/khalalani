<?php

App::uses('AppController', 'Controller');

/**
 * Messages Controller
 *
 * @property Message $Message
 */
class MessagesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Message->recursive = 0;
        $this->set('messages', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Message->exists($id)) {
            throw new NotFoundException(__('Invalid message'));
        }
        $options = array('conditions' => array('Message.' . $this->Message->primaryKey => $id));
        $this->set('message', $this->Message->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->request->data['Message']['user_id'] = $this->Session->read('Auth.User.id');
            $this->request->data['Message']['group_id'] = $this->Session->read('Auth.User.group_id');
            $this->Message->create();
            if ($this->Message->save($this->request->data)) {
                $this->Session->setFlash(__('The message has been saved'), 'custom_flash', array('type' => 'success'));
                $this->redirect(array('controller' => 'complaints', 'action' => 'view', $this->request->data['Message']['complaint_id']));
            } else {
                $this->Session->setFlash(__('The message could not be saved. Please, try again.'), 'custom_flash', array('type' => 'error'));

                $this->redirect(array('controller' => 'complaints', 'action' => 'view', $this->request->data['Message']['complaint_id']));
            }
        }
//		if ($this->request->is('post')) {
//			$this->Message->create();
//			if ($this->Message->save($this->request->data)) {
//				$this->Session->setFlash(__('The message has been saved'));
//				$this->redirect(array('action' => 'index'));
//			} else {
//				$this->Session->setFlash(__('The message could not be saved. Please, try again.'));
//			}
//		}
//		$groups = $this->Message->Group->find('list');
//		$complaints = $this->Message->Complaint->find('list');
//		$this->set(compact('groups', 'complaints'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Message->exists($id)) {
            throw new NotFoundException(__('Invalid message'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Message->save($this->request->data)) {
                $this->Session->setFlash(__('The message has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The message could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Message.' . $this->Message->primaryKey => $id));
            $this->request->data = $this->Message->find('first', $options);
        }
        $groups = $this->Message->Group->find('list');
        $complaints = $this->Message->Complaint->find('list');
        $this->set(compact('groups', 'complaints'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Message->id = $id;
        if (!$this->Message->exists()) {
            throw new NotFoundException(__('Invalid message'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Message->delete()) {
            $this->Session->setFlash(__('Message deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Message was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
