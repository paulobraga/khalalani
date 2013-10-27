<?php
App::uses('AppController', 'Controller');
/**
 * EducationDetails Controller
 *
 * @property EducationDetail $EducationDetail
 */
class EducationDetailsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EducationDetail->recursive = 0;
		$this->set('educationDetails', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EducationDetail->exists($id)) {
			throw new NotFoundException(__('Invalid education detail'));
		}
		$options = array('conditions' => array('EducationDetail.' . $this->EducationDetail->primaryKey => $id));
		$this->set('educationDetail', $this->EducationDetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EducationDetail->create();
			if ($this->EducationDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The education detail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The education detail could not be saved. Please, try again.'));
			}
		}
		$levels = $this->EducationDetail->Level->find('list');
		$courses = $this->EducationDetail->Course->find('list');
		$countries = $this->EducationDetail->Country->find('list');
		$users = $this->EducationDetail->User->find('list');
		$this->set(compact('levels', 'courses', 'countries', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EducationDetail->exists($id)) {
			throw new NotFoundException(__('Invalid education detail'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EducationDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The education detail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The education detail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EducationDetail.' . $this->EducationDetail->primaryKey => $id));
			$this->request->data = $this->EducationDetail->find('first', $options);
		}
		$levels = $this->EducationDetail->Level->find('list');
		$courses = $this->EducationDetail->Course->find('list');
		$countries = $this->EducationDetail->Country->find('list');
		$users = $this->EducationDetail->User->find('list');
		$this->set(compact('levels', 'courses', 'countries', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EducationDetail->id = $id;
		if (!$this->EducationDetail->exists()) {
			throw new NotFoundException(__('Invalid education detail'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EducationDetail->delete()) {
			$this->Session->setFlash(__('Education detail deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Education detail was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
