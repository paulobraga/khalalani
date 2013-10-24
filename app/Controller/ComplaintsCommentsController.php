<?php
App::uses('AppController', 'Controller');
/**
 * ComplaintsComments Controller
 *
 * @property ComplaintsComment $ComplaintsComment
 */
class ComplaintsCommentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ComplaintsComment->recursive = 0;
		$this->set('complaintsComments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ComplaintsComment->exists($id)) {
			throw new NotFoundException(__('Invalid complaints comment'));
		}
		$options = array('conditions' => array('ComplaintsComment.' . $this->ComplaintsComment->primaryKey => $id));
		$this->set('complaintsComment', $this->ComplaintsComment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ComplaintsComment->create();
			if ($this->ComplaintsComment->save($this->request->data)) {
				$this->Session->setFlash(__('The complaints comment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The complaints comment could not be saved. Please, try again.'));
			}
		}
		$users = $this->ComplaintsComment->User->find('list');
		$complaints = $this->ComplaintsComment->Complaint->find('list');
		$this->set(compact('users', 'complaints'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ComplaintsComment->exists($id)) {
			throw new NotFoundException(__('Invalid complaints comment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ComplaintsComment->save($this->request->data)) {
				$this->Session->setFlash(__('The complaints comment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The complaints comment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ComplaintsComment.' . $this->ComplaintsComment->primaryKey => $id));
			$this->request->data = $this->ComplaintsComment->find('first', $options);
		}
		$users = $this->ComplaintsComment->User->find('list');
		$complaints = $this->ComplaintsComment->Complaint->find('list');
		$this->set(compact('users', 'complaints'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ComplaintsComment->id = $id;
		if (!$this->ComplaintsComment->exists()) {
			throw new NotFoundException(__('Invalid complaints comment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ComplaintsComment->delete()) {
			$this->Session->setFlash(__('Complaints comment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Complaints comment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
