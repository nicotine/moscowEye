<p><?php echo $this->Html->link("See all assets", array('action' => 'index') ); ?></p>
<div class="row well">
	<div class="span3">
		<img src="http://placehold.it/140x140" class="img-rounded">
	</div>
	<div class="span3">
		<h1> <?php echo h($asset['Asset']['name'] ); ?></h1>
			<p><small>Created: <?php echo $asset['Asset']['created']; ?></small></p>
		<p> <?php echo $asset['Asset']['detail']; ?> </p>
	</div>
</div>

