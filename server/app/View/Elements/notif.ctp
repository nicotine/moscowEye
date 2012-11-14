<div class="alert alert-<?php echo isset($type)?$type:'success'; ?>">
  <button type="button" class="close" data-dismiss="alert" onclick="$(this).parent().slideUp();	">×</button>
  <p> <?php echo $message; ?> </p>
</div>