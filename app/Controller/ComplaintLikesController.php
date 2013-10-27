<?php
App::uses('AppController', 'Controller');
/**
 * ComplaintLikes Controller
 *
 * @property ComplaintLike $ComplaintLike
 */
class ComplaintLikesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ComplaintLike->recursive = 0;
		$this->set('complaintLikes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ComplaintLike->exists($id)) {
			throw new NotFoundException(__('Invalid complaint like'));
		}
		$options = array('conditions' => array('ComplaintLike.' . $this->ComplaintLike->primaryKey => $id));
		$this->set('complaintLike', $this->ComplaintLike->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ComplaintLike->create();
			if ($this->ComplaintLike->save($this->request->data)) {
				$this->Session->setFlash(__('The complaint like has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The complaint like could not be saved. Please, try again.'));
			}
		}
		$complaints = $this->ComplaintLike->Complaint->find('list');
		$consumers = $this->ComplaintLike->Consumer->find('list');
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
		if (!$this->ComplaintLike->exists($id)) {
			throw new NotFoundException(__('Invalid complaint like'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ComplaintLike->save($this->request->data)) {
				$this->Session->setFlash(__('The complaint like has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The complaint like could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ComplaintLike.' . $this->ComplaintLike->primaryKey => $id));
			$this->request->data = $this->ComplaintLike->find('first', $options);
		}
		$complaints = $this->ComplaintLike->Complaint->find('list');
		$consumers = $this->ComplaintLike->Consumer->find('list');
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
		$this->ComplaintLike->id = $id;
		if (!$this->ComplaintLike->exists()) {
			throw new NotFoundException(__('Invalid complaint like'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ComplaintLike->delete()) {
			$this->Session->setFlash(__('Complaint like deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Complaint like was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
