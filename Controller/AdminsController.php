<?php
App::uses('AppController', 'Controller');
/**
 * Admins Controller
 *
 * @property Admin $Admin
 * @property PaginatorComponent $Paginator
 */
class AdminsController extends AppController {

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
  
  public function admin_login() {                   
    $this->layout = 'adminlogin';
    if ($this->request->is('post')) {  
        $administrator = $this->Admin->login($this->request->data);
        
        if(!empty($administrator))
        {
          $this->Session->write('Admins', $administrator);
        }

        if ($this->Session->read('Admins')) {        
          $this->redirect(array('controller'=>'Leadsentlogs' ,'action' => 'index'));
        } else {
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }
  }  
 
 public function admin_dash()
 {
   
 }
 
function admin_logout(){
     $this->Session->destroy();
     session_destroy();
     $this->redirect(array('controller' => 'Admins', 'action' => 'login')); 

}  
  
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Admin->recursive = 0;
		$this->set('admins', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Admin->exists($id)) {
			throw new NotFoundException(__('Invalid admin'));
		}
		$options = array('conditions' => array('Admin.' . $this->Admin->primaryKey => $id));
		$this->set('admin', $this->Admin->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Admin->create();
			if ($this->Admin->save($this->request->data)) {
				$this->Session->setFlash(__('The admin has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin could not be saved. Please, try again.'));
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
		if (!$this->Admin->exists($id)) {
			throw new NotFoundException(__('Invalid admin'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Admin->save($this->request->data)) {
				$this->Session->setFlash(__('The admin has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The admin could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Admin.' . $this->Admin->primaryKey => $id));
			$this->request->data = $this->Admin->find('first', $options);
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
		$this->Admin->id = $id;
		if (!$this->Admin->exists()) {
			throw new NotFoundException(__('Invalid admin'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Admin->delete()) {
			$this->Session->setFlash(__('The admin has been deleted.'));
		} else {
			$this->Session->setFlash(__('The admin could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
