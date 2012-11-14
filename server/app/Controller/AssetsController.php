<?php
class AssetsController extends AppController{	

	public function index(){
		$this->set('assets', $this->Asset->find('all') );
	}

	public function add(){
		if($this->request->is('post') ){
			$this->Asset->create();
			if($this->Asset->save($this->request->data) ){				
				$this->Session->setFlash('Asset successfully added.', 'notif', array('type'=>'success'));
				$this->redirect(array('action'=>'index') );
			} 
			else {
				$this->Session->setFlash('Sorry, unable to add asset.', 'notif', array('type'=>'error'));
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
			$this->Session->setFlash('The asset with id:'.$id.' has been deleted.', 'notif', array('type'=>'success') );
			$this->redirect(array('action'=>'index'));
		}
	}

	public function edit($id=null){
		$this->Asset->id = $id;
		if($this->request->is('get') ){
			$this->request->data = $this->Asset->read();
		} else {
			if($this->Asset->save($this->request->data) ){
				$this->Session->setFlash('Asset updated.', 'notif', array('type'=>'success') );
				$this->redirect(array('action'=>'index') );
			} else {
				$this->Session->setFlash('Sorry, unable to update asset.', 'notif', array('type'=>'error') );
			}
		}
		//Get all types list
		$this->loadModel('Type');		
		$d['types']      = $this->Type->find('list');
		$childAssets  = $this->Asset->ChildAsset->find('list',array('fields'=>array('id','name'),'conditions'=>array('id !='=>$id)  ));
        $this->set(compact('childAssets'));
        $parentAssets  = $this->Asset->ParentAsset->find('list',array('fields'=>array('id','name'),'conditions'=>array('id !='=>$id)  ));
        $this->set(compact('parentAssets'));
		//$d['assets'] = $this->Asset->find('list', array('fields'=>'id') );
		//$d['parents'] = $this->getParentsList();
		$this->set($d);
	}

	public function show($id=null){
		$this->Asset->id = $id;
		$this->set('asset', $this->Asset->read() );
	}

	public function getParentsList(){
		$parents = $this->Asset->read();
		$list = array();
		foreach($parents['ParentAsset'] as $parent){
			array_push($list, $parent['name']);
		}
		return $list;
	}

	
}