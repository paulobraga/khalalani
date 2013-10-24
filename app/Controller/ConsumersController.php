<?php
App::uses('AppController', 'Controller');
/**
 * Consumers Controller
 *
 * @property Consumer $Consumer
 */
class ConsumersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Consumer->recursive = 0;
		$this->set('consumers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Consumer->exists($id)) {
			throw new NotFoundException(__('Invalid consumer'));
		}
		$options = array('conditions' => array('Consumer.' . $this->Consumer->primaryKey => $id));
		$this->set('consumer', $this->Consumer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Consumer->create();
			if ($this->Consumer->save($this->request->data)) {
				$this->Session->setFlash(__('The consumer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The consumer could not be saved. Please, try again.'));
			}
		}
		$nationalities = $this->Consumer->Nationality->find('list');
		$this->set(compact('nationalities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Consumer->exists($id)) {
			throw new NotFoundException(__('Invalid consumer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Consumer->save($this->request->data)) {
				$this->Session->setFlash(__('The consumer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The consumer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Consumer.' . $this->Consumer->primaryKey => $id));
			$this->request->data = $this->Consumer->find('first', $options);
		}
		$nationalities = $this->Consumer->Nationality->find('list');
		$this->set(compact('nationalities'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Consumer->id = $id;
		if (!$this->Consumer->exists()) {
			throw new NotFoundException(__('Invalid consumer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Consumer->delete()) {
			$this->Session->setFlash(__('Consumer deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Consumer was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
