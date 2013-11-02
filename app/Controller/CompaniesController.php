<?php
App::uses('AppController', 'Controller');
/**
 * Companies Controller
 *
 * @property Company $Company
 */
class CompaniesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Company->recursive = 0;
		$this->set('companies', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Company->exists($id)) {
			throw new NotFoundException(__('Invalid company'));
		}
                $this->Company->contain(array(
                    'Country',
                    'Province',
                    'City',
                    'Branch',
                    'ComplaintCategory',
                    'Complaint',
                    'Manager',
                    'Operator',
                    'Category',
                    'CompanyLike'
                ));
		$options = array('conditions' => array('Company.' . $this->Company->primaryKey => $id));
		$this->set('company', $this->Company->find('first', $options));
                $this->set('companyLike', $this->Company->CompanyLike->find('first',array('conditions'=>array('CompanyLike.consumer_id'=>$this->Session->read('Auth.User.Consumer.id'),'CompanyLike.company_id'=>$id))));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Company->create();
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash(__('The company has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Company->Category->find('list');
                $countries = $this->Company->Country->find('list');
                $provinces = $this->Company->Province->find('list');
                $cities = $this->Company->City->find('list');
		$this->set(compact('categories','countries','provinces','cities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Company->exists($id)) {
			throw new NotFoundException(__('Invalid company'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash(__('The company has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Company.' . $this->Company->primaryKey => $id));
			$this->request->data = $this->Company->find('first', $options);
		}
		$categories = $this->Company->Category->find('list');
                $countries = $this->Company->Country->find('list');
                $provinces = $this->Company->Province->find('list');
                $cities = $this->Company->City->find('list');
		$this->set(compact('categories','countries','provinces','cities'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Company->id = $id;
		if (!$this->Company->exists()) {
			throw new NotFoundException(__('Invalid company'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Company->delete()) {
			$this->Session->setFlash(__('Company deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Company was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
        
        public function selectCompany(){
            
            if($this->request->is('post')){
                //debug($this->request->data);
                $this->redirect(array('controller'=>'complaints','action'=>'add',$this->request->data['User']['company_id']));
            }
            $companies = $this->Company->find('all',array('contain'=>false,'fields'=>array('Company.id','Company.acronym','Company.name','Company.logo','Company.logo_dir')));
            $this->set(compact('companies'));
            
        }
}
