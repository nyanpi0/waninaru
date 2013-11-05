<?php
class UsersController extends AppController{
	public $helpers = array('Html' , 'Form');
	
	public function admin_index(){
		$this->set('users' , $this->User->find('all'));
	}
	
	public function admin_userDetail($id = null){
		$this->User->id = $id;
		$this->set('user',$this->User->read());
	}
	
	public function admin_userRegist(){
		if($this->request->isPost()){
			if($this->User->save($this->request->data)){
				$this->redirect(array('action'=>'admin_index'));
			} else {
				$this->Session->setFlash('失敗したよ!!!');
			}
		}
	}
	
	public function admin_userDelete($id){
		$this->User->id = $id;
		$this->set('user',$this->User->read());
		if($this->request->isPost()){
			$this->User->delete($this->request->data($this->User->id));
			$this->redirect(array('action'=>'admin_index'));
		}
	}
	
	public function admin_userUpdate($id){
		$this->User->id = $id;
		if($this->request->isGet()){
			$this->request->data=$this->User->read();
		}else{
			if($this->User->save($this->request->data)){
				$this->redirect(array('action'=>'admin_index'));
			} else {
				$this->Session->setFlash('失敗したよ!!!');
			}
		}
	}
	
	public function login() {
		$this->autoRender = false;
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('Invalid username or password, try again'));
			}
		}
	}
	
	public function logout() {
		$this->redirect($this->Auth->logout());
	}
}

?>