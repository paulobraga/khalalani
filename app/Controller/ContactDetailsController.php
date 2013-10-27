<?php
App::uses('AppController', 'Controller');
/**
 * ContactDetails Controller
 *
 * @property ContactDetail $ContactDetail
 */
class ContactDetailsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ContactDetail->recursive = 0;
		$this->set('contactDetails', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ContactDetail->exists($id)) {
			throw new NotFoundException(__('Invalid contact detail'));
		}
		$options = array('conditions' => array('ContactDetail.' . $this->ContactDetail->primaryKey => $id));
		$this->set('contactDetail', $this->ContactDetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ContactDetail->create();
			if ($this->ContactDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The contact detail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact detail could not be saved. Please, try again.'));
			}
		}
		$countries = $this->ContactDetail->Country->find('list');
		$provinces = $this->ContactDetail->Province->find('list');
		$cities = $this->ContactDetail->City->find('list');
		$users = $this->ContactDetail->User->find('list');
		$this->set(compact('countries', 'provinces', 'cities', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ContactDetail->exists($id)) {
			throw new NotFoundException(__('Invalid contact detail'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ContactDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The contact detail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact detail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContactDetail.' . $this->ContactDetail->primaryKey => $id));
			$this->request->data = $this->ContactDetail->find('first', $options);
		}
		$countries = $this->ContactDetail->Country->find('list');
		$provinces = $this->ContactDetail->Province->find('list');
		$cities = $this->ContactDetail->City->find('list');
		$users = $this->ContactDetail->User->find('list');
		$this->set(compact('countries', 'provinces', 'cities', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ContactDetail->id = $id;
		if (!$this->ContactDetail->exists()) {
			throw new NotFoundException(__('Invalid contact detail'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ContactDetail->delete()) {
			$this->Session->setFlash(__('Contact detail deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contact detail was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
