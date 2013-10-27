<?php
App::uses('AppController', 'Controller');
/**
 * PersonalDetails Controller
 *
 * @property PersonalDetail $PersonalDetail
 */
class PersonalDetailsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PersonalDetail->recursive = 0;
		$this->set('personalDetails', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PersonalDetail->exists($id)) {
			throw new NotFoundException(__('Invalid personal detail'));
		}
		$options = array('conditions' => array('PersonalDetail.' . $this->PersonalDetail->primaryKey => $id));
		$this->set('personalDetail', $this->PersonalDetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PersonalDetail->create();
			if ($this->PersonalDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The personal detail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personal detail could not be saved. Please, try again.'));
			}
		}
		$nationalities = $this->PersonalDetail->Nationality->find('list');
		$countries = $this->PersonalDetail->Country->find('list');
		$provinces = $this->PersonalDetail->Province->find('list');
		$cities = $this->PersonalDetail->City->find('list');
		$users = $this->PersonalDetail->User->find('list');
		$this->set(compact('nationalities', 'countries', 'provinces', 'cities', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PersonalDetail->exists($id)) {
			throw new NotFoundException(__('Invalid personal detail'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PersonalDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The personal detail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personal detail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PersonalDetail.' . $this->PersonalDetail->primaryKey => $id));
			$this->request->data = $this->PersonalDetail->find('first', $options);
		}
		$nationalities = $this->PersonalDetail->Nationality->find('list');
		$countries = $this->PersonalDetail->Country->find('list');
		$provinces = $this->PersonalDetail->Province->find('list');
		$cities = $this->PersonalDetail->City->find('list');
		$users = $this->PersonalDetail->User->find('list');
		$this->set(compact('nationalities', 'countries', 'provinces', 'cities', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PersonalDetail->id = $id;
		if (!$this->PersonalDetail->exists()) {
			throw new NotFoundException(__('Invalid personal detail'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PersonalDetail->delete()) {
			$this->Session->setFlash(__('Personal detail deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Personal detail was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
