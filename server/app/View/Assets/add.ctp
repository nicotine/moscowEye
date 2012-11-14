<h1>Add Asset</h1>
<?php
	echo $this->Form->create('Asset');
	echo $this->Form->input('name');
	echo $this->Form->input('path');
	echo $this->Form->input('type_id', array('labe'=>'Type') );
	echo $this->Form->input('detail', array('rows' => '3') );
	echo $this->Form->end('Save Asset', array('div'=>'false', 'class'=>'btn btn-primary')  );
?>