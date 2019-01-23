<?php require_once APPROOT.'/views/inc/header.php'; ?> 	
<div class="jumbotron jumbotron-fluid">
  <div class="container">
  	<?php flash('login_success'); ?>
    <h1 class="display-4"><?= $data['title'] ?></h1> 
    <p class="lead"><?= $data['description'] ?></p>
  </div>
</div>
<?php require_once APPROOT.'/views/inc/footer.php'; ?>   