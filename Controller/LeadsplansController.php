<?php
App::uses('AppController', 'Controller');
/**
 * Leadsplans Controller
 *
 * @property Leadsplan $Leadsplan
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LeadsplansController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

  function beforeFilter($options = Array()) {  
    $this->Auth->allow('admin_add'); 
    parent::beforeFilter($options = Array());
  }  
  
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Leadsplan->recursive = 0;
		$this->set('leadsplans', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Leadsplan->exists($id)) {
			throw new NotFoundException(__('Invalid leadsplan'));
		}
		$options = array('conditions' => array('Leadsplan.' . $this->Leadsplan->primaryKey => $id));
		$this->set('leadsplan', $this->Leadsplan->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Leadsplan->create();
			if ($this->Leadsplan->save($this->request->data)) {
				$this->Session->setFlash(__('The leadsplan has been saved.'));
				return $this->redirect(array('action' => 'setleads', 'controller' => 'companies'));
			} else {
				$this->Session->setFlash(__('The leadsplan could not be saved. Please, try again.'));
        return $this->redirect(array('action' => 'setleadsadd', 'controller' => 'companies'));
			}
		}
		$companies = $this->Leadsplan->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Leadsplan->exists($id)) {
			throw new NotFoundException(__('Invalid leadsplan'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Leadsplan->save($this->request->data)) {
				$this->Session->setFlash(__('The leadsplan has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The leadsplan could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Leadsplan.' . $this->Leadsplan->primaryKey => $id));
			$this->request->data = $this->Leadsplan->find('first', $options);
		}
		$companies = $this->Leadsplan->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Leadsplan->id = $id;
		if (!$this->Leadsplan->exists()) {
			throw new NotFoundException(__('Invalid leadsplan'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Leadsplan->delete()) {
			$this->Session->setFlash(__('The leadsplan has been deleted.'));
		} else {
			$this->Session->setFlash(__('The leadsplan could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
