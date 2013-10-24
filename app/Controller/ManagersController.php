<?php
App::uses('AppController', 'Controller');
/**
 * Managers Controller
 *
 * @property Manager $Manager
 */
class ManagersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Manager->recursive = 0;
		$this->set('managers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Manager->exists($id)) {
			throw new NotFoundException(__('Invalid manager'));
		}
		$options = array('conditions' => array('Manager.' . $this->Manager->primaryKey => $id));
		$this->set('manager', $this->Manager->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Manager->create();
			if ($this->Manager->save($this->request->data)) {
				$this->Session->setFlash(__('The manager has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The manager could not be saved. Please, try again.'));
			}
		}
		$users = $this->Manager->User->find('list');
		$companies = $this->Manager->Company->find('list');
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
		if (!$this->Manager->exists($id)) {
			throw new NotFoundException(__('Invalid manager'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Manager->save($this->request->data)) {
				$this->Session->setFlash(__('The manager has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The manager could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Manager.' . $this->Manager->primaryKey => $id));
			$this->request->data = $this->Manager->find('first', $options);
		}
		$users = $this->Manager->User->find('list');
		$companies = $this->Manager->Company->find('list');
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
		$this->Manager->id = $id;
		if (!$this->Manager->exists()) {
			throw new NotFoundException(__('Invalid manager'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Manager->delete()) {
			$this->Session->setFlash(__('Manager deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Manager was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
