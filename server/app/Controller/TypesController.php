<?php
class TypesController extends AppController{

	public function index(){
		$this->element('topbar', array('name'=>'camarche') );
		$this->set('types', $this->Type->find('all') );
	}

	public function add(){
		if($this->request->is('post') ){
			$this->Type->create();

			if ($this->Type->hasAny($this->postConditions($this->data))) {
				$this->Session->setFlash('This type is allready in the table.', 'notif', array('type'=>'error') );
			} else {


				if($this->Type->save($this->request->data) ){
					$this->Session->setFlash('New type added.', 'notif');
					$this->redirect(array('controller'=>'types','action'=>'index') );
				} else {
					$this->Session->setFlash("Sorry but this type can't be added.", 'notif', array('type'=>'error') );
				}
			}
		}
	}

	public function show($id=null){
		$this->Type->id = $id;
		$d['type'] = $this->Type->read();
		$this->loadModel('Asset');
		$d['assets'] = $this->Asset->find('all', array('conditions'=>array('type_id'=>$id),'fields'=>array('name','id') ) );
		$this->set($d);
	}
}