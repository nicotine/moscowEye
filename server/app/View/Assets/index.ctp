<ul class="breadcrumb">
  <li class="active">Assets<span class="divider">/</span></li>
</ul>

<h1>Assets</h1>

<table class="table table-striped table-hover">
	<tr>
		
		<th>Name</th>
    <?php foreach($steps as $step){
      echo "<th>".$step."</th>";
    }      
    ?>

		<th>Created</th>
	</tr>

	<?php?>
	<?php foreach ($assets as $asset): ?>
	<tr>
		
		<td> <?php echo $this->Html->link($asset['Asset']['name'], 
											array('controller' => 'assets','action' => 'show',$asset['Asset']['id'] ),
											array('title'=>$asset['Asset']['detail'] )
											);?>
  		</td>
      <td> 
          <div class="progress  progress-striped">
            <div class="bar" style="width: 10%;"></div>
            </div> 
        </td>
        <td> 
          <div class="progress  progress-striped">
            <div class="bar" style="width: 10%;"></div>
            </div> 
        </td>

  		<td> <?php echo $asset['Asset']['created']; ?> </td>
	</tr>
<?php endforeach; ?>
<?php unset($asset); ?>
</table>

<?php
  debug($assets);
?>