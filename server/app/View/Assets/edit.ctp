<h1>Edit Asset</h1>
<p><?php echo $this->Html->link("See all assets", array('action' => 'index') ); ?></p>
<?php	
	//debug($this->params);
	debug($childAssets);
	echo $this->Form->create('Asset');
	echo $this->Form->input('name');
	echo $this->Form->input('path');
	echo $this->Form->input('type_id', array('label'=>'Type') );
	echo $this->Form->input('ParentAsset.ParentAsset', array('label'=> 'Used By:', 'multiple'=>'checkbox' ) );
	echo $this->Form->input('ChildAsset.ChildAsset', array('label'=> 'Uses:',  'multiple'=>'checkbox') );
	echo $this->Form->input('detail', array('rows' => '3') );
	echo $this->Form->end('Save Asset');
	$this->Form->input('id');
?>