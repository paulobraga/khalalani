<?php
App::uses('AppController', 'Controller');
/**
 * Operators Controller
 *
 * @property Operator $Operator
 */
class OperatorsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Operator->recursive = 0;
		$this->set('operators', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Operator->exists($id)) {
			throw new NotFoundException(__('Invalid operator'));
		}
		$options = array('conditions' => array('Operator.' . $this->Operator->primaryKey => $id));
		$this->set('operator', $this->Operator->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Operator->create();
			if ($this->Operator->save($this->request->data)) {
				$this->Session->setFlash(__('The operator has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operator could not be saved. Please, try again.'));
			}
		}
		$users = $this->Operator->User->find('list');
		$companies = $this->Operator->Company->find('list');
		$this->set(compact('users', 'companies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Operator->exists($id)) {
			throw new NotFoundException(__('Invalid operator'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Operator->save($this->request->data)) {
				$this->Session->setFlash(__('The operator has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operator could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Operator.' . $this->Operator->primaryKey => $id));
			$this->request->data = $this->Operator->find('first', $options);
		}
		$users = $this->Operator->User->find('list');
		$companies = $this->Operator->Company->find('list');
		$this->set(compact('users', 'companies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Operator->id = $id;
		if (!$this->Operator->exists()) {
			throw new NotFoundException(__('Invalid operator'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Operator->delete()) {
			$this->Session->setFlash(__('Operator deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Operator was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
