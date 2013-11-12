<?php

App::uses('AppController', 'Controller');

/**
 * ComplaintCategories Controller
 *
 * @property ComplaintCategory $ComplaintCategory
 */
class ComplaintCategoriesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->ComplaintCategory->recursive = 0;
        $this->set('complaintCategories', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->ComplaintCategory->exists($id)) {
            throw new NotFoundException(__('Invalid complaint category'));
        }
        $options = array('conditions' => array('ComplaintCategory.' . $this->ComplaintCategory->primaryKey => $id));
        $this->set('complaintCategory', $this->ComplaintCategory->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->ComplaintCategory->create();
            if ($this->ComplaintCategory->save($this->request->data)) {
                $this->Session->setFlash(__('The complaint category has been saved'), 'custom_flash', array('type' => 'success'));
                $this->redirect(array('controller' => 'companies', 'action' => 'view', $this->ComplaintCategory->field('company_id')));
            } else {
                $this->Session->setFlash(__('This complaint category already exists for this company'), 'custom_flash', array('type' => 'error'));
                $this->redirect(array('controller' => 'companies', 'action' => 'view', $this->request->data['ComplaintCategory']['company_id']));
            }
        }
        $companies = $this->ComplaintCategory->Company->find('list');
        $this->set(compact('companies'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->ComplaintCategory->exists($id)) {
            throw new NotFoundException(__('Invalid complaint category'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->ComplaintCategory->save($this->request->data)) {
                $this->Session->setFlash(__('The complaint category has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The complaint category could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('ComplaintCategory.' . $this->ComplaintCategory->primaryKey => $id));
            $this->request->data = $this->ComplaintCategory->find('first', $options);
        }
        $companies = $this->ComplaintCategory->Company->find('list');
        $this->set(compact('companies'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->ComplaintCategory->id = $id;
        if (!$this->ComplaintCategory->exists()) {
            throw new NotFoundException(__('Invalid complaint category'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->ComplaintCategory->delete()) {
            $this->Session->setFlash(__('Complaint category deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Complaint category was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
    
    public function listByCompanyId(){
        $company_id = $this->Session->read('Auth.User.Manager.company_id');
        $complaintCategories = $this->ComplaintCategory->findAllByCompanyId($company_id);
        $this->set(compact('complaintCategories'));
    }

}
