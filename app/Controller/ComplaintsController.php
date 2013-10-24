<?php
App::uses('AppController', 'Controller');
/**
 * Complaints Controller
 *
 * @property Complaint $Complaint
 */
class ComplaintsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Complaint->recursive = 0;
		$this->set('complaints', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Complaint->exists($id)) {
			throw new NotFoundException(__('Invalid complaint'));
		}
		$options = array('conditions' => array('Complaint.' . $this->Complaint->primaryKey => $id));
		$this->set('complaint', $this->Complaint->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Complaint->create();
			if ($this->Complaint->save($this->request->data)) {
				$this->Session->setFlash(__('The complaint has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The complaint could not be saved. Please, try again.'));
			}
		}
		$companies = $this->Complaint->Company->find('list');
		$consumers = $this->Complaint->Consumer->find('list');
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
		if (!$this->Complaint->exists($id)) {
			throw new NotFoundException(__('Invalid complaint'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Complaint->save($this->request->data)) {
				$this->Session->setFlash(__('The complaint has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The complaint could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Complaint.' . $this->Complaint->primaryKey => $id));
			$this->request->data = $this->Complaint->find('first', $options);
		}
		$companies = $this->Complaint->Company->find('list');
		$consumers = $this->Complaint->Consumer->find('list');
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
		$this->Complaint->id = $id;
		if (!$this->Complaint->exists()) {
			throw new NotFoundException(__('Invalid complaint'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Complaint->delete()) {
			$this->Session->setFlash(__('Complaint deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Complaint was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
