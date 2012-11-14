<ul class="breadcrumb">
  <li> <?php echo $this->Html->link('Assets', array('action'=>'index') ); ?> <span class="divider">/</span></li>
  <li class="active">Edit <span class="divider">/</span></li>
</ul>

<h1>Edit Asset</h1>
<?php	
	//debug($this->params);
	debug($childAssets);
	echo $this->Form->create('Asset');
	echo $this->Form->input('name');
	echo $this->Form->input('path');
	echo $this->Form->input('type_id', array('label'=>'Type') );
	echo $this->Html->link('Add new', array('controller'=>'types','action'=>'add') );
	echo $this->Form->input('ParentAsset.ParentAsset', array('label'=> 'Used By:', 'multiple'=>'checkbox' ) );
	echo $this->Form->input('ChildAsset.ChildAsset', array('label'=> 'Uses:',  'multiple'=>'checkbox') );
	echo $this->Form->input('detail', array('rows' => '3') );
	echo $this->Form->end('Save Asset');
	$this->Form->input('id');
?>