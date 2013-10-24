<?php
App::uses('AppController', 'Controller');
/**
 * CompaniesCategories Controller
 *
 * @property CompaniesCategory $CompaniesCategory
 */
class CompaniesCategoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CompaniesCategory->recursive = 0;
		$this->set('companiesCategories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompaniesCategory->exists($id)) {
			throw new NotFoundException(__('Invalid companies category'));
		}
		$options = array('conditions' => array('CompaniesCategory.' . $this->CompaniesCategory->primaryKey => $id));
		$this->set('companiesCategory', $this->CompaniesCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompaniesCategory->create();
			if ($this->CompaniesCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The companies category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companies category could not be saved. Please, try again.'));
			}
		}
		$companies = $this->CompaniesCategory->Company->find('list');
		$categories = $this->CompaniesCategory->Category->find('list');
		$this->set(compact('companies', 'categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CompaniesCategory->exists($id)) {
			throw new NotFoundException(__('Invalid companies category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CompaniesCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The companies category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The companies category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompaniesCategory.' . $this->CompaniesCategory->primaryKey => $id));
			$this->request->data = $this->CompaniesCategory->find('first', $options);
		}
		$companies = $this->CompaniesCategory->Company->find('list');
		$categories = $this->CompaniesCategory->Category->find('list');
		$this->set(compact('companies', 'categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CompaniesCategory->id = $id;
		if (!$this->CompaniesCategory->exists()) {
			throw new NotFoundException(__('Invalid companies category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CompaniesCategory->delete()) {
			$this->Session->setFlash(__('Companies category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Companies category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
