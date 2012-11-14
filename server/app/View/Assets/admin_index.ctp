<h1>Assets</h1>
<?php
echo $this->Html->link('Add Asset', array('controller'=>'assets',
										'action'=>'add') );
?>
<table class="table table-striped table-hover">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Relateds</th>
		<th>Actions</th>
		<th>Created</th>
	</tr>

	<?php?>
	<?php foreach ($assets as $asset): ?>
	<tr>
		<td> <?php echo $asset['Asset']['id']; ?> </td>
		<td> <?php echo $this->Html->link($asset['Asset']['name'], 
											array('controller' => 'assets','action' => 'show',$asset['Asset']['id'] ),
											array('title'=>$asset['Asset']['detail'] )
											);?>
  		</td>
  		<td> Parent:
  			<?php foreach($asset['ParentAsset'] as $parent):
  					echo $parent['name'].'|';
  				endforeach;
  			?>
  		</br>
  			Children:
  			<?php foreach($asset['ChildAsset'] as $child):
  					echo $child['name'].'|';
  				endforeach;
  			?>
  		</td>
  		<td> <button type="button" class="btn"><?php echo $this->Html->link('Edit', array('action'=>'edit', $asset['Asset']['id'] ) ) ?> </button>
  			<button class="btn">
        <?php 
  			echo $this->Form->postLink(
  				'Delete',
  			     array('action'=>'delete', $asset['Asset']['id'] ),
  			     array('confirm'=>'Are you sure?') 
  			     );
  			?>
        </button>
  		</td>
  		<td> <?php echo $asset['Asset']['created']; ?> </td>
	</tr>
<?php endforeach; ?>
<?php unset($asset); ?>
</table>