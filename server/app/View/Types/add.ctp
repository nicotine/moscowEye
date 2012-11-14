<h1>Add New Type</h1>
<?php
	echo $this->Form->create('Type');
	echo $this->Form->input('name');
	echo $this->Form->end(array('label'=>'Add','div'=>'false', 'class'=>'btn btn-primary')  );
?>