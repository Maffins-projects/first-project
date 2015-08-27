<?php
App::uses('AppController', 'Controller');
/**
 * Loads Controller
 *
 * @property Load $Load
 * @property PaginatorComponent $Paginator
 */
class LoadsController extends AppController {
 
  function beforeFilter($options = Array()) {  
    $this->Auth->allow('admin_login', 'admin_dash', 'admin_index', 'admin_add', 'admin_edit', 'admin_view', 'add', 'home', 'edit', 'success'); 
   // parent::beforeFilter($options = Array());
  }
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
 /*
	public function index() {
		$this->Load->recursive = 0;
		$this->set('loads', $this->Paginator->paginate());
	}
  */
  public function home(){
    
  }
  
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Load->exists($id)) {
			throw new NotFoundException(__('Invalid load'));
		}
		$options = array('conditions' => array('Load.' . $this->Load->primaryKey => $id));
		$this->set('load', $this->Load->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($user_id) {
		if ($this->request->is('post')) {
   //   $this->request->data['Load']['user_id'] = $this->request->data['Load']['userid'];
      
			$this->Load->create();
			if ($this->Load->save($this->request->data)) {
				$this->Session->setFlash(__('Your request has been captured successfully.'));
        $loadid = $this->Load->getLastInsertID(); 
        $kombonenti = new SendleadsComponent();
        $campaigns = $kombonenti->getCampaigns('Loads');
        
        App::uses('CakeEmail', 'Network/Email');  
        $email = new CakeEmail();
        //Generate the confirmation email
        $user = $this->Load->User->findById($this->request->data['Load']['user_id']);
        $email->viewVars(array('user' => $user, 'Loadid' => $loadid)); 
        /*
        $email->template('welcome', 'fancy')
            ->emailFormat('both')
            ->to($user['User']['email'])
            ->subject('Quotations request sent successfully')
            ->from('info@removal-leads.co.za')
            ->send();  
         */   
        foreach($campaigns as $camp)
        {
          //Foreach campaign i have to know how many leads per day and how many have been sent so far
          //First get the number of leads sent so far for this particular campaign
          $leads_sent = $kombonenti->countOveralLeadsSent($camp['cs']['campid']);
          if($leads_sent[0][0]['total'] <= $camp['cs']['total_leads']):

          $email->viewVars(array('message' => $camp, 'user' => $user, 'Loaddata' => $this->request->data, 'Loadid' => $loadid)); 
            
            //Generate the confirmation email
        /*    $email->template('lead_l', 'fancy')
                ->emailFormat('both')
                ->to($camp['campaigns']['email'])
                ->subject('Quotation Request')
                ->from('cust@removal-leads.co.za')
                ->send();             
              */
           //print_r($camp['cs']);die;
            //This is for saving the leads$camp['cs']['total_leads'];
            $data['company_id']          = $camp['cs']['company_id'];
            $data['campaign_id']         = $camp['cs']['campid'];
            $data['lead_type']           = 'Load';
            $data['leadID']              = $loadid;
            $data['client_reference_id'] = $camp['cs']['campid'];
            $data['status']              = "Sent";

            $kombonenti->saveSendLead($data);
          endif;  
        }
        
				return $this->redirect(array('action' => 'success',$loadid,$user_id));
			} else {
				$this->Session->setFlash(__('The details could not be saved please try again'));
			}
		}
		//$users = $this->Load->User->find('list');
		$this->set(compact('user_id'));
	}

  public function success($loadid, $userid)
  {
    App::uses('CakeEmail', 'Network/Email');  
    $email = new CakeEmail(); 
    ini_set('memory_limit', '-1');    
    
    //Get the user details
    $user = $this->Load->getUser($userid);
    $companies[] = "Global Vision";
    /*
    $email->viewVars(array('message' => $user, 'companies' => $companies, 'loadid' => $loadid )); 
      $email->template('welcome', 'fancy')
          ->emailFormat('both')
          ->to($user[0]['users']['email'])
          ->subject('Request Forwarded Successfully')
          ->from('info@weregistercompany.co.za')
          ->send();    
    */                 
    $this->set('user', $user);
    $this->set('loadid', $loadid);
    $this->set('companies', $companies);
  }
  
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Load->exists($id)) {
			throw new NotFoundException(__('Invalid load'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Load->save($this->request->data)) {
				$this->Session->setFlash(__('The load has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The load could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Load.' . $this->Load->primaryKey => $id));
			$this->request->data = $this->Load->find('first', $options);
		}
		$users = $this->Load->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Load->id = $id;
		if (!$this->Load->exists()) {
			throw new NotFoundException(__('Invalid load'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Load->delete()) {
			$this->Session->setFlash(__('The load has been deleted.'));
		} else {
			$this->Session->setFlash(__('The load could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
    $this->layout = "admin";
		$this->Load->recursive = 0;
		$this->set('loads', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Load->exists($id)) {
			throw new NotFoundException(__('Invalid load'));
		}
		$options = array('conditions' => array('Load.' . $this->Load->primaryKey => $id));
		$this->set('load', $this->Load->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Load->create();
			if ($this->Load->save($this->request->data)) {
				$this->Session->setFlash(__('The load has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The load could not be saved. Please, try again.'));
			}
		}
		$users = $this->Load->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Load->exists($id)) {
			throw new NotFoundException(__('Invalid load'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Load->save($this->request->data)) {
				$this->Session->setFlash(__('The load has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The load could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Load.' . $this->Load->primaryKey => $id));
			$this->request->data = $this->Load->find('first', $options);
		}
		$users = $this->Load->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Load->id = $id;
		if (!$this->Load->exists()) {
			throw new NotFoundException(__('Invalid load'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Load->delete()) {
			$this->Session->setFlash(__('The load has been deleted.'));
		} else {
			$this->Session->setFlash(__('The load could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
