<?php
class AssetsController extends AppController{
	public function index(){
		$this->set('assets', $this->Asset->find('all') );
	}

	public function add(){
		if($this->request->is('post') ){
			$this->Asset->create();
			if($this->Asset->save($this->request->data) ){				
				$this->Session->setFlash('Asset successfully added.');
				$this->redirect(array('action'=>'index') );
			} 
			else {
				$this->Session->setFlash('Sorry, unable to add asset.');
			}			
		}
		//Get all types list
		$this->loadModel('Type');			
		$d['types'] = $this->Type->find('list');
		$this->set($d);
	}

	public function delete($id=null){
		if ($this->request->is('get') ){
			throw new MethodNotAllowException();
		}
		if ($this->Asset->delete($id) ){
			$this->Session->setFlash('The asset with id:'.$id.' has been deleted.');
			$this->redirect(array('action'=>'index'));
		}
	}

	public function edit($id=null){
		$this->Asset->id = $id;
		if($this->request->is('get') ){
			$this->request->data = $this->Asset->read();
		} else {
			if($this->Asset->save($this->request->data) ){
				$this->Session->setFlash('Asset updated.');
				$this->redirect(array('action'=>'index') );
			} else {
				$this->Session->setFlash('Sorry, unable to update asset.');
			}
		}
		//Get all types list
		$this->loadModel('Type');		
		$d['types'] = $this->Type->find('list');
		$d['asset'] = $this->Asset->read();
		$this->set($d);
	}

	public function show($id=null){
		$this->Asset->id = $id;
		$this->set('asset', $this->Asset->read() );
	}
}