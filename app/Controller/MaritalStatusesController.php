<?php
App::uses('AppController', 'Controller');
/**
 * MaritalStatuses Controller
 *
 * @property MaritalStatus $MaritalStatus
 */
class MaritalStatusesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MaritalStatus->recursive = 0;
		$this->set('maritalStatuses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MaritalStatus->exists($id)) {
			throw new NotFoundException(__('Invalid marital status'));
		}
		$options = array('conditions' => array('MaritalStatus.' . $this->MaritalStatus->primaryKey => $id));
		$this->set('maritalStatus', $this->MaritalStatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MaritalStatus->create();
			if ($this->MaritalStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The marital status has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The marital status could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MaritalStatus->exists($id)) {
			throw new NotFoundException(__('Invalid marital status'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MaritalStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The marital status has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The marital status could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MaritalStatus.' . $this->MaritalStatus->primaryKey => $id));
			$this->request->data = $this->MaritalStatus->find('first', $options);
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
		$this->MaritalStatus->id = $id;
		if (!$this->MaritalStatus->exists()) {
			throw new NotFoundException(__('Invalid marital status'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MaritalStatus->delete()) {
			$this->Session->setFlash(__('Marital status deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Marital status was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
