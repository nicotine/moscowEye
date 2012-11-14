<h1>Types</h1>
<table class="table table-striped">
	<th>Id</th>
	<th>Name</th>
<?php foreach($types as $type): ?>
	<tr> 
		<td> <?php echo $type['Type']['id'] ?> </td>
		<td> <?php echo $this->Html->link($type['Type']['name'], array('action'=>'show', $type['Type']['id']) ) ?> </td>
	</tr>
<?php endforeach; ?>
</table>