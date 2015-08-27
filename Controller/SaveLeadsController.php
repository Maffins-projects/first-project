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
    $this->Auth->allow('initialialize', 'add'); 
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
      if ($this->SaveLead->save($this->request->data)) {
        $this->Session->setFlash(__('The initial province information has been saved.'));
        return $this->redirect(array('action' => 'add', $this->SaveLead->id));
      } else {
        $this->Session->setFlash(__('The save lead could not be saved. Please, try again.'));
      }
    }
    $users = $this->SaveLead->User->find('list');
    $this->set(compact('users'));
  }
  
/**
 * add method
 *
 * @return void
 */
	public function add($id) {
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
       $anotherModel = new AnotherModel();
       $anotherModel->save($client);
       
       //Unset the user details
       unset($this->request->data['SaveLead']['fname']);
       unset($this->request->data['SaveLead']['lname']);
       unset($this->request->data['SaveLead']['cellphone']);
       unset($this->request->data['SaveLead']['email']);
       
			if ($this->SaveLead->save($this->request->data)) {
				$this->Session->setFlash(__('The save lead has been saved.'));
				return $this->redirect(array('action' => 'success'));
			} else {
				$this->Session->setFlash(__('The save lead could not be saved. Please, try again.'));
			}
		}
    $prov = $this->SaveLead->findAllById($id);     
		$this->set(compact('id', 'prov'));
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
