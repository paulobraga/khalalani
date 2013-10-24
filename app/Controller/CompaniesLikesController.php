<?php
App::uses('AppController', 'Controller');
/**
 * CompaniesLikes Controller
 *
 * @property CompaniesLike $CompaniesLike
 */
class CompaniesLikesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CompaniesLike->recursive = 0;
		$this->set('companiesLikes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompaniesLike->exists($id)) {
			throw new NotFoundException(__('Invalid companies like'));
		}
		$options = array('conditions' => array('CompaniesLike.' . $this->CompaniesLike->primaryKey => $id));
		$this->set('companiesLike', $this->CompaniesLike->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompaniesLike->create();
			if ($this->CompaniesLike->save($this->request->data)) {
				$this->Session->setFlash(__('The companies like has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companies like could not be saved. Please, try again.'));
			}
		}
		$companies = $this->CompaniesLike->Company->find('list');
		$consumers = $this->CompaniesLike->Consumer->find('list');
		$this->set(compact('companies', 'consumers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CompaniesLike->exists($id)) {
			throw new NotFoundException(__('Invalid companies like'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CompaniesLike->save($this->request->data)) {
				$this->Session->setFlash(__('The companies like has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companies like could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompaniesLike.' . $this->CompaniesLike->primaryKey => $id));
			$this->request->data = $this->CompaniesLike->find('first', $options);
		}
		$companies = $this->CompaniesLike->Company->find('list');
		$consumers = $this->CompaniesLike->Consumer->find('list');
		$this->set(compact('companies', 'consumers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CompaniesLike->id = $id;
		if (!$this->CompaniesLike->exists()) {
			throw new NotFoundException(__('Invalid companies like'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CompaniesLike->delete()) {
			$this->Session->setFlash(__('Companies like deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Companies like was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
