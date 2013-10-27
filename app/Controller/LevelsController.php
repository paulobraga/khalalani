<?php
App::uses('AppController', 'Controller');
/**
 * Levels Controller
 *
 * @property Level $Level
 */
class LevelsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Level->recursive = 0;
		$this->set('levels', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Level->exists($id)) {
			throw new NotFoundException(__('Invalid level'));
		}
		$options = array('conditions' => array('Level.' . $this->Level->primaryKey => $id));
		$this->set('level', $this->Level->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Level->create();
			if ($this->Level->save($this->request->data)) {
				$this->Session->setFlash(__('The level has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The level could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Level->exists($id)) {
			throw new NotFoundException(__('Invalid level'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Level->save($this->request->data)) {
				$this->Session->setFlash(__('The level has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The level could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Level.' . $this->Level->primaryKey => $id));
			$this->request->data = $this->Level->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Level->id = $id;
		if (!$this->Level->exists()) {
			throw new NotFoundException(__('Invalid level'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Level->delete()) {
			$this->Session->setFlash(__('Level deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Level was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
