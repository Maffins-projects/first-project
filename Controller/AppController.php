<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
  var $components = array('Auth', 'Session', 'Sendleads');
  
  function beforeFilter() {   
        $this->Auth->autoRedirect = false;
        $this->Auth->allow('*');

        if ($this->params['admin']) {    //echo $this->params['admin']." maffins CLIVE ".$this->action;die;

        $this->Auth->userModel = 'Admin'; 
            if($this->action != 'admin_login' && $this->action != 'admin_logout') { 
             if(!$this->Session->read('Admins')) {
                $this->flash("The URL you\'ve followed requires you login.",'/login',2);
                $this->layout = 'adminlogin';     //echo "Its inside where i want it to be xxxxxxxxxxxx";die;  
                $this->redirect('/admin/Admins/login'); 
            }else{
              $this->layout = "admin";
            }
          }
        }else{
            $this->components = array('Auth', '');
        }
    } 
    
}
