<?php
App::uses('AppController', 'Controller');
/**
 * Leadsentlogs Controller
 *
 * @property Leadsentlog $Leadsentlog
 * @property PaginatorComponent $Paginator
 */
class LeadsentlogsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

  function beforeFilter($options = Array()) {  
    $this->Auth->allow('admin_login', 'admin_dash', 'admin_index', 'admin_add', 'admin_edit', 'admin_view', 'admin_logout'); 
    parent::beforeFilter($options = Array());
  }
    
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Leadsentlog->recursive = 0;
		$this->set('leadsentlogs', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Leadsentlog->exists($id)) {
			throw new NotFoundException(__('Invalid leadsentlog'));
		}
		$options = array('conditions' => array('Leadsentlog.' . $this->Leadsentlog->primaryKey => $id));
		$this->set('leadsentlog', $this->Leadsentlog->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Leadsentlog->create();
			if ($this->Leadsentlog->save($this->request->data)) {
				$this->Session->setFlash(__('The leadsentlog has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The leadsentlog could not be saved. Please, try again.'));
			}
		}
		$clients = $this->Leadsentlog->Client->find('list');
		$campaigns = $this->Leadsentlog->Campaign->find('list');
		$clientReferences = $this->Leadsentlog->ClientReference->find('list');
		$this->set(compact('clients', 'campaigns', 'clientReferences'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Leadsentlog->exists($id)) {
			throw new NotFoundException(__('Invalid leadsentlog'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Leadsentlog->save($this->request->data)) {
				$this->Session->setFlash(__('The leadsentlog has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The leadsentlog could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Leadsentlog.' . $this->Leadsentlog->primaryKey => $id));
			$this->request->data = $this->Leadsentlog->find('first', $options);
		}
		$clients = $this->Leadsentlog->Client->find('list');
		$campaigns = $this->Leadsentlog->Campaign->find('list');
		$clientReferences = $this->Leadsentlog->ClientReference->find('list');
		$this->set(compact('clients', 'campaigns', 'clientReferences'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Leadsentlog->id = $id;
		if (!$this->Leadsentlog->exists()) {
			throw new NotFoundException(__('Invalid leadsentlog'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Leadsentlog->delete()) {
			$this->Session->setFlash(__('The leadsentlog has been deleted.'));
		} else {
			$this->Session->setFlash(__('The leadsentlog could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
