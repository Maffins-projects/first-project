<?php
App::uses('AppController', 'Controller');
/**
 * Companies Controller
 *
 * @property Company $Company
 */
class CompaniesController extends AppController {

  function beforeFilter($options = Array()) {  
    $this->Auth->allow('admin_login', 'admin_dash', 'admin_setleadsadd', 'admin_setleads', 'admin_suspend', 'admin_index', 'admin_add', 'admin_edit', 'admin_view', 'add', 'view'); 
    parent::beforeFilter($options = Array());
  }  

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
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Company->id = $id;
		if (!$this->Company->exists()) {
			throw new NotFoundException(__('Invalid company'));
		}
		$this->set('company', $this->Company->read(null, $id));
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
        $id = $this->Company->getLastInsertId();
				$this->redirect(array('action' => 'view',$id));
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Company->id = $id;
		if (!$this->Company->exists()) {
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
			$this->request->data = $this->Company->read(null, $id);
		}
	}

/**
 * setleads method
 *
 * @return void
 */
  public function admin_setleads() {
    $this->loadModel('Leadsplan');
    $plans = $this->Leadsplan->find('all');
    $this->set(compact('plans'));
  }
  
/**
 * setleadsadd method
 *
 * @return void
 */
  public function admin_setleadsadd() {

    //Get all the active companies.
    $companies = $this->Company->find('all', array(
                       'conditions' => array('Company.status =' => 'Active') 
                      ));
    $company[0] = '- Please Select -';                  
    //Build an options array of companies
    foreach($companies as $comp) {
      $company[$comp['Company']['id']] = $comp['Company']['company_name'];
    }                  
    $this->set(compact('company'));
  }
  
/**
 * sendleadclients method
 *  todo: for now the process of sending will be manual automate later to use a cron
 * @return void
 */
	public function admin_sendleadclients($lead_id) {
   /**
   * Check what type of lead it is
   * Check the province the lead is from
   * Get the companies in that province get 5 for now
   * and get them randomly
   * Compose an email with all the details of the client
   */
	}
  
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Company->recursive = 0;
		$this->set('companies', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Company->id = $id;
		if (!$this->Company->exists()) {
			throw new NotFoundException(__('Invalid company'));
		}
		$this->set('company', $this->Company->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Company->create();
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash(__('The company has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Company->id = $id;
		if (!$this->Company->exists()) {
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
			$this->request->data = $this->Company->read(null, $id);
		}
	}

/**
 * admin_suspend method
 *
 * @param string $id
 * @return void
 */
	public function admin_suspend($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Company->id = $id;
		if (!$this->Company->exists()) {
			throw new NotFoundException(__('Invalid company'));
		}
    $company = $this->Company->read('status', $id); 
    $updateStatus = '';
    if($company['Company']['status'] == 'Active') {
      $updateStatus = 'Suspended';
    } else {
      $updateStatus = 'Active';
    }
    $this->Company->set('status', $updateStatus);
   
		if ($this->Company->save()) {
			$this->Session->setFlash(__('Company suspended successfully'));
			$this->redirect(array('action' => 'index'));
		}       
		$this->Session->setFlash(__('Company was not suspended'));
		$this->redirect(array('action' => 'index'));
	}
}
