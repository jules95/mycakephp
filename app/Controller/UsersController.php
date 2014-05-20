<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController {
	public function isAuthorized($user) {
		if (isset($user['role'])) {
	        return true;
	    }
	    return parent::isAuthorized($user);
	}
 
	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('logout', 'login');
    }
 
	public function login() {
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	        	$this->Session->setFlash(__('Successfully logged in'),'default',array('class' => 'alert alert-success'));
	            return $this->redirect($this->Auth->redirect());
	        } else {
	            $this->Session->setFlash(__("Bad username or password, please try again."),'default',array('class' => 'alert alert-danger'));
	        }
	    }
	}
 
	public function logout() {
		$this->Session->setFlash(__('Successfully logged out'),'default',array('class' => 'alert alert-success'));
	    return $this->redirect($this->Auth->logout());
	}
}
