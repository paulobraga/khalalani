<?php
App::uses('AppController', 'Controller');
/**
 * ComplaintComments Controller
 *
 * @property ComplaintComment $ComplaintComment
 */
class ComplaintCommentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ComplaintComment->recursive = 0;
		$this->set('complaintComments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ComplaintComment->exists($id)) {
			throw new NotFoundException(__('Invalid complaint comment'));
		}
		$options = array('conditions' => array('ComplaintComment.' . $this->ComplaintComment->primaryKey => $id));
		$this->set('complaintComment', $this->ComplaintComment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ComplaintComment->create();
			if ($this->ComplaintComment->save($this->request->data)) {
				$this->Session->setFlash(__('The complaint comment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The complaint comment could not be saved. Please, try again.'));
			}
		}
		$users = $this->ComplaintComment->User->find('list');
		$complaints = $this->ComplaintComment->Complaint->find('list');
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
		if (!$this->ComplaintComment->exists($id)) {
			throw new NotFoundException(__('Invalid complaint comment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ComplaintComment->save($this->request->data)) {
				$this->Session->setFlash(__('The complaint comment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The complaint comment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ComplaintComment.' . $this->ComplaintComment->primaryKey => $id));
			$this->request->data = $this->ComplaintComment->find('first', $options);
		}
		$users = $this->ComplaintComment->User->find('list');
		$complaints = $this->ComplaintComment->Complaint->find('list');
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
		$this->ComplaintComment->id = $id;
		if (!$this->ComplaintComment->exists()) {
			throw new NotFoundException(__('Invalid complaint comment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ComplaintComment->delete()) {
			$this->Session->setFlash(__('Complaint comment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Complaint comment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
