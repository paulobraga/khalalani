<?php
App::uses('AppController', 'Controller');
/**
 * Provinces Controller
 *
 * @property Province $Province
 */
class ProvincesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Province->recursive = 0;
		$this->set('provinces', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Province->exists($id)) {
			throw new NotFoundException(__('Invalid province'));
		}
		$options = array('conditions' => array('Province.' . $this->Province->primaryKey => $id));
		$this->set('province', $this->Province->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Province->create();
			if ($this->Province->save($this->request->data)) {
				$this->Session->setFlash(__('The province has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The province could not be saved. Please, try again.'));
			}
		}
		$countries = $this->Province->Country->find('list');
		$this->set(compact('countries'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Province->exists($id)) {
			throw new NotFoundException(__('Invalid province'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Province->save($this->request->data)) {
				$this->Session->setFlash(__('The province has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The province could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Province.' . $this->Province->primaryKey => $id));
			$this->request->data = $this->Province->find('first', $options);
		}
		$countries = $this->Province->Country->find('list');
		$this->set(compact('countries'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Province->id = $id;
		if (!$this->Province->exists()) {
			throw new NotFoundException(__('Invalid province'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Province->delete()) {
			$this->Session->setFlash(__('Province deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Province was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
