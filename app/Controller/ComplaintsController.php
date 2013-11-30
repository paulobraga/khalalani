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
                $this->Complaint->contain(
                        array(
                            'Company',
                            'Consumer'=>array(
                                'User'=>array(
                                    'PersonalDetail',
                                    'ContactDetail'
                                )
                            ),
                            'ComplaintCategory',
                            'ComplaintComment',
                            'ComplaintLike',
                            'Message'
                        )
                        );
		$options = array('conditions' => array('Complaint.' . $this->Complaint->primaryKey => $id));
		$this->set('complaint', $this->Complaint->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($company_id=null) {
            if(!$this->Complaint->Company->exists($company_id)){
                throw new NotFoundException(__('Invalid Company'));
            }
		if ($this->request->is('post')) {
			$this->Complaint->create();
                        $this->request->data['Complaint']['company_id']=$company_id;
                        $this->request->data['Complaint']['status']=1;
                        $this->request->data['Complaint']['consumer_id']=$this->Session->read('Auth.User.Consumer.id');
			if ($this->Complaint->save($this->request->data)) {
				$this->Session->setFlash(__('The complaint has been saved'),'custom_flash',array('type'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The complaint could not be saved. Please, try again.'),'custom_flash',array('type'=>'error'));
			}
		}
		$company = $this->Complaint->Company->find('first',array('conditions'=>array('Company.id'=>$company_id)));
		$complaintCategories = $this->Complaint->ComplaintCategory->find('list',array('conditions'=>array('ComplaintCategory.company_id'=>$company_id)));
		$this->set(compact('company', 'consumers', 'complaintCategories'));
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
		$complaintCategories = $this->Complaint->ComplaintCategory->find('list');
		$this->set(compact('companies', 'consumers', 'complaintCategories'));
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
        
        public function listByCompanyId(){
            $company_id = $this->Session->read('Auth.User.Manager.company_id');
            if(!$company_id){
                $company_id =$this->Session->read('Auth.User.Operator.company_id');
            }
            $complaints = $this->Complaint->findAllByCompanyId($company_id);
            $this->set(compact('complaints'));
        }
        
        public function listByConsumerId(){
            $consumer_id = $this->Session->read('Auth.User.Consumer.id');
            $complaints = $this->Complaint->findAllByConsumerId($consumer_id);
            $this->set(compact('complaints'));
            $this->render('index');
        }
        
        public function beforeFilter() {
            parent::beforeFilter();
            $this->Auth->allow('index');
        }
        
        public function reply(){
            if($this->request->is('post')){
                
            }
        }
}
