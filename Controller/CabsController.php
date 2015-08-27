<?php
App::uses('AppController', 'Controller');
/**
 * Cabs Controller
 *
 * @property Cab $Cab
 * @property PaginatorComponent $Paginator
 */
class CabsController extends AppController {

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
		$this->Cab->recursive = 0;
		$this->set('cabs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cab->exists($id)) {
			throw new NotFoundException(__('Invalid cab'));
		}
		$options = array('conditions' => array('Cab.' . $this->Cab->primaryKey => $id));
		$this->set('cab', $this->Cab->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
public function add($user_id) {
    
    if ($this->request->is('post')) {  
      $this->Cab->create();
     // print_r($this->request->data);
      if ($this->Cab->saveCab($this->request->data)) {
        $cabid = $this->Cab->find('first',array('order'=>'Cab.id DESC')); 
        $cabid = $cabid['Cab']['id'];
        $kombonenti = new SendleadsComponent();
        $cabdata    = $this->request->data; 
            
        $this->Session->setFlash(__('Your cab request has been sent successfully.'));

        //Get all the active campaigns
        $campaigns = $kombonenti->getCampaigns('Cab');

        App::uses('CakeEmail', 'Network/Email');  
        $email = new CakeEmail();
        
        //Send an email to customer
        //Get the user details first
        $user = $this->Cab->User->findById($this->request->data['Taxi cab']['userid']);
        $email->viewVars(array('user' => $user, 'cabid' => $cabid)); 
             
          //Generate the confirmation email
          $email->template('welcome_cab', 'fancy')
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
            $email->viewVars(array('message' => $camp, 'user' => $user, 'cabdata' => $cabdata, 'cabid' => $cabid)); 
               
            //Generate the confirmation email
            $email->template('lead', 'fancy')
                ->emailFormat('both')
                ->to($camp['campaigns']['email'])
                ->subject('Quotation Request')
                ->from('cust@removal-leads.co.za')
                ->send();             
         
           //print_r($camp['cs']);die;
            //This is for saving the leads$camp['cs']['total_leads'];
            $data['company_id']          = $camp['cs']['company_id'];
            $data['campaign_id']         = $camp['cs']['campid'];
            $data['lead_type']           = 'Cab';
            $data['leadID']              = $cabid;
            $data['client_reference_id'] = $camp['cs']['campid'];
            $data['status']              = "Sent";

            $kombonenti->saveSendLead($data);
          endif;  
        }
        return $this->redirect(array('action' => 'success',$cabid,$user_id));
      } else {
        $this->Session->setFlash(__('The cab could not be saved. Please, try again.'));
      }
    }
    
    $users = $this->Cab->User->find('list');
    $this->set(compact('users', 'user_id'));
  }
  
 /************************************************************************************************************/

  public function success($cabid, $userid)
  {
    App::uses('CakeEmail', 'Network/Email');  
    $email = new CakeEmail(); 
    ini_set('memory_limit', '-1');    
    
    //Get the user details
    $user = $this->Cab->getUser($userid);
    $companies[] = "Global Vision";
    /*
    $email->viewVars(array('message' => $user, 'companies' => $companies, 'shuttleid' => $cabid )); 
      $email->template('welcome_cab', 'fancy')
          ->emailFormat('both')
          ->to($user[0]['users']['email'])
          ->subject('Request Forwarded Successfully')
          ->from('info@weregistercompany.co.za')
          ->send();    
    */                 
    $this->set('user', $user);
    $this->set('cabid', $cabid);
    $this->set('companies', $companies);
  } 

/*************************************************************************************************************/
  
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cab->exists($id)) {
			throw new NotFoundException(__('Invalid cab'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cab->save($this->request->data)) {
				$this->Session->setFlash(__('The cab has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cab could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cab.' . $this->Cab->primaryKey => $id));
			$this->request->data = $this->Cab->find('first', $options);
		}
		$users = $this->Cab->User->find('list');
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
		$this->Cab->id = $id;
		if (!$this->Cab->exists()) {
			throw new NotFoundException(__('Invalid cab'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cab->delete()) {
			$this->Session->setFlash(__('The cab has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cab could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Cab->recursive = 0;
		$this->set('cabs', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Cab->exists($id)) {
			throw new NotFoundException(__('Invalid cab'));
		}
		$options = array('conditions' => array('Cab.' . $this->Cab->primaryKey => $id));
		$this->set('cab', $this->Cab->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Cab->create();
			if ($this->Cab->save($this->request->data)) {
				$this->Session->setFlash(__('The cab has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cab could not be saved. Please, try again.'));
			}
		}
		$users = $this->Cab->User->find('list');
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
		if (!$this->Cab->exists($id)) {
			throw new NotFoundException(__('Invalid cab'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cab->save($this->request->data)) {
				$this->Session->setFlash(__('The cab has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cab could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cab.' . $this->Cab->primaryKey => $id));
			$this->request->data = $this->Cab->find('first', $options);
		}
		$users = $this->Cab->User->find('list');
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
		$this->Cab->id = $id;
		if (!$this->Cab->exists()) {
			throw new NotFoundException(__('Invalid cab'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cab->delete()) {
			$this->Session->setFlash(__('The cab has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cab could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
