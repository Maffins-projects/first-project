<?php
App::uses('AppController', 'Controller');
/**
 * Trackers Controller
 *
 * @property Tracker $Tracker
 * @property PaginatorComponent $Paginator
 */
class TrackersController extends AppController {

  function beforeFilter($options = Array()) {  
    $this->Auth->allow('admin_login', 'admin_dash', 'admin_index', 'admin_add', 'admin_edit', 'admin_view'); 
    parent::beforeFilter($options = Array());
  }  
  
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Tracker->recursive = 0;
		$this->set('trackers', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Tracker->exists($id)) {
			throw new NotFoundException(__('Invalid tracker'));
		}
		$options = array('conditions' => array('Tracker.' . $this->Tracker->primaryKey => $id));
		$this->set('tracker', $this->Tracker->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Tracker->create();
			if ($this->Tracker->save($this->request->data)) {
				$this->Session->setFlash(__('The tracker has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tracker could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Tracker->exists($id)) {
			throw new NotFoundException(__('Invalid tracker'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tracker->save($this->request->data)) {
				$this->Session->setFlash(__('The tracker has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tracker could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tracker.' . $this->Tracker->primaryKey => $id));
			$this->request->data = $this->Tracker->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Tracker->id = $id;
		if (!$this->Tracker->exists()) {
			throw new NotFoundException(__('Invalid tracker'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tracker->delete()) {
			$this->Session->setFlash(__('The tracker has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tracker could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
