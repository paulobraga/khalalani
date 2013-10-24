<?php
App::uses('AppController', 'Controller');
/**
 * ComplaintsLikes Controller
 *
 * @property ComplaintsLike $ComplaintsLike
 */
class ComplaintsLikesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ComplaintsLike->recursive = 0;
		$this->set('complaintsLikes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ComplaintsLike->exists($id)) {
			throw new NotFoundException(__('Invalid complaints like'));
		}
		$options = array('conditions' => array('ComplaintsLike.' . $this->ComplaintsLike->primaryKey => $id));
		$this->set('complaintsLike', $this->ComplaintsLike->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ComplaintsLike->create();
			if ($this->ComplaintsLike->save($this->request->data)) {
				$this->Session->setFlash(__('The complaints like has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The complaints like could not be saved. Please, try again.'));
			}
		}
		$complaints = $this->ComplaintsLike->Complaint->find('list');
		$consumers = $this->ComplaintsLike->Consumer->find('list');
		$this->set(compact('complaints', 'consumers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ComplaintsLike->exists($id)) {
			throw new NotFoundException(__('Invalid complaints like'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ComplaintsLike->save($this->request->data)) {
				$this->Session->setFlash(__('The complaints like has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The complaints like could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ComplaintsLike.' . $this->ComplaintsLike->primaryKey => $id));
			$this->request->data = $this->ComplaintsLike->find('first', $options);
		}
		$complaints = $this->ComplaintsLike->Complaint->find('list');
		$consumers = $this->ComplaintsLike->Consumer->find('list');
		$this->set(compact('complaints', 'consumers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ComplaintsLike->id = $id;
		if (!$this->ComplaintsLike->exists()) {
			throw new NotFoundException(__('Invalid complaints like'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ComplaintsLike->delete()) {
			$this->Session->setFlash(__('Complaints like deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Complaints like was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
