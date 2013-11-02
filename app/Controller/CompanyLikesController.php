<?php

App::uses('AppController', 'Controller');

/**
 * CompanyLikes Controller
 *
 * @property CompanyLike $CompanyLike
 */
class CompanyLikesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->CompanyLike->recursive = 0;
        $this->set('companyLikes', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->CompanyLike->exists($id)) {
            throw new NotFoundException(__('Invalid company like'));
        }
        $options = array('conditions' => array('CompanyLike.' . $this->CompanyLike->primaryKey => $id));
        $this->set('companyLike', $this->CompanyLike->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($company_id, $consumer_id) {
        if (!$company_id || !$consumer_id) {
            throw new NotFoundException(__('Invalid Data'));
        }
        if ($this->request->is('post')) {
            $this->CompanyLike->create();
            $this->request->data[$this->CompanyLike->alias]['company_id'] = $company_id;
            $this->request->data[$this->CompanyLike->alias]['consumer_id'] = $consumer_id;
            if ($this->CompanyLike->save($this->request->data)) {
                $this->Session->setFlash(__('The company like has been saved'));
                $this->redirect(array('controller' => 'companies', 'action' => 'view', $company_id));
            } else {
                $this->Session->setFlash(__('The company like could not be saved. Please, try again.'));
                $this->redirect(array('controller' => 'companies', 'action' => 'view', $company_id));
            }
        }
        $companies = $this->CompanyLike->Company->find('list');
        $consumers = $this->CompanyLike->Consumer->find('list');
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
        if (!$this->CompanyLike->exists($id)) {
            throw new NotFoundException(__('Invalid company like'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->CompanyLike->save($this->request->data)) {
                $this->Session->setFlash(__('The company like has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The company like could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('CompanyLike.' . $this->CompanyLike->primaryKey => $id));
            $this->request->data = $this->CompanyLike->find('first', $options);
        }
        $companies = $this->CompanyLike->Company->find('list');
        $consumers = $this->CompanyLike->Consumer->find('list');
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
        $this->CompanyLike->id = $id;
        if (!$this->CompanyLike->exists()) {
            throw new NotFoundException(__('Invalid company like'));
        }
        $company_id = $this->CompanyLike->field('company_id');
        $this->request->onlyAllow('post', 'delete');
        if ($this->CompanyLike->delete()) {
            $this->Session->setFlash(__('Company like deleted'));
            $this->redirect(array('controller' => 'companies', 'action' => 'view', $company_id));
        }
        $this->Session->setFlash(__('Company like was not deleted'));
        $this->redirect(array('controller' => 'companies', 'action' => 'view', $company_id));
    }

}
