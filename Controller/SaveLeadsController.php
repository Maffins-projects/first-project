<?php
App::uses('AppController', 'Controller');
/**
 * SaveLeads Controller
 *
 * @property SaveLead $SaveLead
 * @property PaginatorComponent $Paginator
 * @property SecurityComponent $Security
 * @property SessionComponent $Session
 */
class SaveLeadsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Js');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
  
  function beforeFilter($options = Array()) {  
    $this->Auth->allow('initialialize', 'add', 'success', 'addinternational'); 
  } 
   
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SaveLead->exists($id)) {
			throw new NotFoundException(__('Invalid save lead'));
		}
		$options = array('conditions' => array('SaveLead.' . $this->SaveLead->primaryKey => $id));
		$this->set('saveLead', $this->SaveLead->find('first', $options));
	}

/**
 * add method
 *
 * @return int lead id
 */
  public function initialialize() {
    if ($this->request->is('post')) {
      $this->SaveLead->create();
      $which = $this->request->data['SaveLead']['page'];
      
      if ($this->SaveLead->save($this->request->data)) {
        $this->Session->setFlash(__('The initial province information has been saved.'));
        if ($which == 3) {
          return $this->redirect(array('action' => 'addinternational', $this->SaveLead->id));     
        } else {
          return $this->redirect(array('action' => 'add', $this->SaveLead->id, $which));
        }
        
      } else {
        $this->Session->setFlash(__('The save lead could not be saved. Please, try again.'));
      }
    }
    $users = $this->SaveLead->User->find('list');
    $this->set(compact('users'));
  }
  
/**
 * add method
 *  Saves International leads
 * @return void
 */
  public function addinternational($id) {
    if ($this->request->is('post')) {
      $this->SaveLead->create();
       //Save the client details
       $client['Client']['fname'] = $this->request->data['SaveLead']['fname'];
       $client['Client']['lname'] = $this->request->data['SaveLead']['lname'];
       $client['Client']['SaveLead_id'] = $this->request->data['SaveLead']['savelead_id'];
       $client['Client']['email'] = $this->request->data['SaveLead']['email'];
       $client['Client']['cellphone'] = $this->request->data['SaveLead']['cellphone'];
       //Save Client
       App::import('Model','Client');
       $anotherModel = new Client();
       $anotherModel->save($client);
       $this->request->data['SaveLead']['client_id'] = $anotherModel->id;
       
       //Unset the user details
       unset($this->request->data['SaveLead']['fname']);
       unset($this->request->data['SaveLead']['lname']);
       unset($this->request->data['SaveLead']['cellphone']);
       unset($this->request->data['SaveLead']['email']);
       
       //Set the id so you can do an update
       $this->SaveLead->id = $this->request->data['SaveLead']['savelead_id'];
       
      if ($this->SaveLead->save($this->request->data)) {
        $this->Session->setFlash(__('Your information has been sent to removal companies.'));
        return $this->redirect(array('action' => 'success', $id));
      } else {
        $this->Session->setFlash(__('The save lead could not be saved. Please, try again.'));
      }
    }
    $prov = $this->SaveLead->findAllById($id);     
    $this->set(compact('id', 'prov'));
  }
  
/**
 * add method
 *  Saves residential and commercial leads
 * @return void
 */
	public function add($id, $which) {
		if ($this->request->is('post')) {
			$this->SaveLead->create();
       //Save the client details
       $client['Client']['fname'] = $this->request->data['SaveLead']['fname'];
       $client['Client']['lname'] = $this->request->data['SaveLead']['lname'];
       $client['Client']['SaveLead_id'] = $this->request->data['SaveLead']['savelead_id'];
       $client['Client']['email'] = $this->request->data['SaveLead']['email'];
       $client['Client']['cellphone'] = $this->request->data['SaveLead']['cellphone'];
       //Save Client
       App::import('Model','Client');
       $anotherModel = new Client();
       $anotherModel->save($client);
       $this->request->data['SaveLead']['client_id'] = $anotherModel->id;
       
       //Unset the user details
       unset($this->request->data['SaveLead']['fname']);
       unset($this->request->data['SaveLead']['lname']);
       unset($this->request->data['SaveLead']['cellphone']);
       unset($this->request->data['SaveLead']['email']);
       
       //Set the id so you can do an update
       $this->SaveLead->id = $this->request->data['SaveLead']['savelead_id'];
       
			if ($this->SaveLead->save($this->request->data)) {
				$this->Session->setFlash(__('Your information has been sent to removal companies.'));
				return $this->redirect(array('action' => 'success', $id));
			} else {
        debug($this->SaveLead->validationErrors); //show validationErrors

         debug($this->SaveLead->getDataSource()->getLog(false, false));die;
				$this->Session->setFlash(__('The save lead could not be saved. Please, try again.'));
			}
		}
    $prov = $this->SaveLead->findAllById($id);     
		$this->set(compact('id', 'prov', 'which'));
	}

  public function success($loadid)
  {
    App::uses('CakeEmail', 'Network/Email');  
    $email = new CakeEmail(); 
    ini_set('memory_limit', '-1');    
    
    //Get the user details
    $loadDetails = $this->SaveLead->findById($loadid);
    /*
    $email->viewVars(array('message' => $loadDetails )); 
      $email->template('welcome', 'fancy')
          ->emailFormat('both')
          ->to($user[0]['users']['email'])
          ->subject('Request Forwarded Successfully')
          ->from('info@removal-leads.co.za')
          ->send();    
    */                 
   $this->set(compact('loadDetails'));
  }  
  
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SaveLead->exists($id)) {
			throw new NotFoundException(__('Invalid save lead'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SaveLead->save($this->request->data)) {
				$this->Session->setFlash(__('The save lead has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The save lead could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SaveLead.' . $this->SaveLead->primaryKey => $id));
			$this->request->data = $this->SaveLead->find('first', $options);
		}
		$users = $this->SaveLead->User->find('list');
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
		$this->SaveLead->id = $id;
		if (!$this->SaveLead->exists()) {
			throw new NotFoundException(__('Invalid save lead'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SaveLead->delete()) {
			$this->Session->setFlash(__('The save lead has been deleted.'));
		} else {
			$this->Session->setFlash(__('The save lead could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->SaveLead->recursive = 0;
		$this->set('saveLeads', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->SaveLead->exists($id)) {
			throw new NotFoundException(__('Invalid save lead'));
		}
		$options = array('conditions' => array('SaveLead.' . $this->SaveLead->primaryKey => $id));
		$this->set('saveLead', $this->SaveLead->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->SaveLead->create();
			if ($this->SaveLead->save($this->request->data)) {
				$this->Session->setFlash(__('The save lead has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The save lead could not be saved. Please, try again.'));
			}
		}
		$users = $this->SaveLead->User->find('list');
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
		if (!$this->SaveLead->exists($id)) {
			throw new NotFoundException(__('Invalid save lead'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SaveLead->save($this->request->data)) {
				$this->Session->setFlash(__('The save lead has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The save lead could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SaveLead.' . $this->SaveLead->primaryKey => $id));
			$this->request->data = $this->SaveLead->find('first', $options);
		}
		$users = $this->SaveLead->User->find('list');
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
		$this->SaveLead->id = $id;
		if (!$this->SaveLead->exists()) {
			throw new NotFoundException(__('Invalid save lead'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SaveLead->delete()) {
			$this->Session->setFlash(__('The save lead has been deleted.'));
		} else {
			$this->Session->setFlash(__('The save lead could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
