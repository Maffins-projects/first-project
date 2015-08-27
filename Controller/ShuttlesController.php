<?php
App::uses('AppController', 'Controller');
/**
 * Shuttles Controller
 *
 * @property Shuttle $Shuttle
 * @property PaginatorComponent $Paginator
 */
class ShuttlesController extends AppController {

    function beforeFilter($options = Array()) {  
    $this->Auth->allow('admin_login', 'admin_dash', 'admin_index', 'admin_add', 'admin_edit', 'admin_view', 'add', 'edit', 'index', 'view', 'success'); 
    parent::beforeFilter($options = Array());
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
	public function index() {
		$this->Shuttle->recursive = 0;
		$this->set('shuttles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Shuttle->exists($id)) {
			throw new NotFoundException(__('Invalid shuttle'));
		}
		$options = array('conditions' => array('Shuttle.' . $this->Shuttle->primaryKey => $id));
		$this->set('shuttle', $this->Shuttle->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($user_id) {
		if ($this->request->is('post')) {
			$this->Shuttle->create();
      $this->request->data['Shuttle']['user_id'] = $this->request->data['Shuttle']['userid'];
      
			if ($this->Shuttle->save($this->request->data)) {
        $this->Session->setFlash(__('Your shuttle request has been sent successfully.'));
        $shuttleid = $this->Shuttle->getLastInsertID(); 

        $kombonenti = new SendleadsComponent();
        $campaigns = $kombonenti->getCampaigns('Shuttle');
        
        App::uses('CakeEmail', 'Network/Email');  
        $email = new CakeEmail();
        //Generate the confirmation email
        $user = $this->Shuttle->User->findById($this->request->data['Shuttle']['userid']);
        $email->viewVars(array('user' => $user, 'shuttleid' => $shuttleid)); 
      
        $email->template('welcome_shuttle', 'fancy')
            ->emailFormat('both')
            ->to($user['User']['email'])
            ->subject('Quotations request sent successfully')
            ->from('info@removal-leads.co.za')
            ->send();  
            
        foreach($campaigns as $camp)
        {
          //Foreach campaign i have to know how many leads per day and how many have been sent so far
          //First get the number of leads sent so far for this particular campaign
          $leads_sent = $kombonenti->countOveralLeadsSent($camp['cs']['campid']);
          if($leads_sent[0][0]['total'] <= $camp['cs']['total_leads']):

          $email->viewVars(array('message' => $camp, 'user' => $user, 'shuttledata' => $this->request->data, 'shuttleid' => $shuttleid)); 
            
            //Generate the confirmation email
            $email->template('lead_sh', 'fancy')
                ->emailFormat('both')
                ->to($camp['campaigns']['email'])
                ->subject('Quotation Request')
                ->from('cust@removal-leads.co.za')
                ->send();             
        
           //print_r($camp['cs']);die;
            //This is for saving the leads$camp['cs']['total_leads'];
            $data['company_id']          = $camp['cs']['company_id'];
            $data['campaign_id']         = $camp['cs']['campid'];
            $data['lead_type']           = 'Shuttle';
            $data['leadID']              = $shuttleid;
            $data['client_reference_id'] = $camp['cs']['campid'];
            $data['status']              = "Sent";

            $kombonenti->saveSendLead($data);
          endif;  
        }
                
        return $this->redirect(array('action' => 'success',$shuttleid,$user_id));   
			} else {
				$this->Session->setFlash(__('The shuttle could not be saved. Please, try again.'));
			}
		}
		$users = $this->Shuttle->User->find('list');
		$this->set(compact('users', 'user_id'));
	}
  
 /************************************************************************************************************/

  public function success($shuttleid, $userid)
  {
    App::uses('CakeEmail', 'Network/Email');  
    $email = new CakeEmail(); 
    ini_set('memory_limit', '-1');    
    
    //Get the user details
    $user = $this->Shuttle->getUser($userid);
    $companies[] = "Global Vision";
    /*
    $email->viewVars(array('message' => $user, 'companies' => $companies, 'shuttleid' => $shuttleid )); 
      $email->template('welcome_shuttle', 'fancy')
          ->emailFormat('both')
          ->to($user[0]['users']['email'])
          ->subject('Request Forwarded Successfully')
          ->from('info@weregistercompany.co.za')
          ->send();    
    */                 
    $this->set('user', $user);
    $this->set('shuttleid', $shuttleid);
    $this->set('companies', $companies);
  } 
 /************************************************************************************************************/ 

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Shuttle->exists($id)) {
			throw new NotFoundException(__('Invalid shuttle'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Shuttle->save($this->request->data)) {
				$this->Session->setFlash(__('The shuttle has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shuttle could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Shuttle.' . $this->Shuttle->primaryKey => $id));
			$this->request->data = $this->Shuttle->find('first', $options);
		}
		$users = $this->Shuttle->User->find('list');
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
		$this->Shuttle->id = $id;
		if (!$this->Shuttle->exists()) {
			throw new NotFoundException(__('Invalid shuttle'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Shuttle->delete()) {
			$this->Session->setFlash(__('The shuttle has been deleted.'));
		} else {
			$this->Session->setFlash(__('The shuttle could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Shuttle->recursive = 0;
		$this->set('shuttles', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Shuttle->exists($id)) {
			throw new NotFoundException(__('Invalid shuttle'));
		}
		$options = array('conditions' => array('Shuttle.' . $this->Shuttle->primaryKey => $id));
		$this->set('shuttle', $this->Shuttle->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Shuttle->create();
			if ($this->Shuttle->save($this->request->data)) {
				$this->Session->setFlash(__('The shuttle has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shuttle could not be saved. Please, try again.'));
			}
		}
		$users = $this->Shuttle->User->find('list');
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
		if (!$this->Shuttle->exists($id)) {
			throw new NotFoundException(__('Invalid shuttle'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Shuttle->save($this->request->data)) {
				$this->Session->setFlash(__('The shuttle has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shuttle could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Shuttle.' . $this->Shuttle->primaryKey => $id));
			$this->request->data = $this->Shuttle->find('first', $options);
		}
		$users = $this->Shuttle->User->find('list');
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
		$this->Shuttle->id = $id;
		if (!$this->Shuttle->exists()) {
			throw new NotFoundException(__('Invalid shuttle'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Shuttle->delete()) {
			$this->Session->setFlash(__('The shuttle has been deleted.'));
		} else {
			$this->Session->setFlash(__('The shuttle could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
