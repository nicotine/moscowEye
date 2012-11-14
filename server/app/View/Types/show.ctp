<h1><?php echo $type['Type']['name']; ?></h1>
<?php // debug($assets); ?>
<table class="table table-striped">
	<th>Id</th>
	<th>Name</th>
<?php foreach($assets as $asset): ?>
	<tr> 
		<td> <?php echo $asset['Asset']['id'] ?> </td>
		<td> <?php echo $this->Html->link($asset['Asset']['name'], array('controller'=>'assets','action'=>'show', $asset['Asset']['id']) ) ?> </td>
	</tr>
<?php endforeach; ?>
</table>
