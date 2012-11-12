<p><?php echo $this->Html->link("See all assets", array('action' => 'index') ); ?></p>

<h1> <?php echo h($asset['Asset']['name'] ); ?></h1>
<p><small>Created: <?php echo $asset['Asset']['created']; ?></small></p>
<p> <?php echo $asset['Asset']['detail']; ?> </p>