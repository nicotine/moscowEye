<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $title_for_layout; ?></title>
    <!-- Bootstrap -->
    <link href="<?php echo $this->Html->url('/css/bootstrap.less'); ?>" rel="stylesheet/less" media="screen">
    <?php echo $this->Html->script('less'); ?>
    <?php $scripts_for_layout; ?>
  </head>
  <body>

    <?php echo $this->element('topbar');?>
    <div class="container">
      <?php echo $this->Session->flash(); ?>
      <?php echo $this->fetch('content'); ?>
    </div>


    <?php echo $this->element('sql_dump'); ?>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
  </body>
  
</html>