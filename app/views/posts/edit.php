<?php require_once APPROOT.'/views/inc/header.php'; ?> 	
<div class="row">
	<div class="col-md-8 offset-2 mt-5">
		<div class="card">
		  <div class="card-body">
		    <h5 class="card-title">Edit post</h5>
				<form action="<?= URLROOT ?>/posts/edit/<?= $data['id'] ?>" method="post">       
				  <div class="form-group">
				    <label for="title">Title</label>
				    <input type="text" name="title" id="title" class="form-control <?= !empty($data['title_error']) ? 'is-invalid' : '' ?>" value="<?= $data['title'] ?>" placeholder="Title">
				    <span class="invalid-feedback"><?= $data['title_error'] ?></span>
				  </div>
				  <div class="form-group">
				    <label for="body">Body</label>
				  	<textarea name="body" id="body" cols="5" rows="5" class="form-control <?= !empty($data['body_error']) ? 'is-invalid' : '' ?>"><?= $data['body'] ?></textarea> 
				  	    <span class="invalid-feedback"><?= $data['body_error'] ?></span> 
				  </div>
				 
				  <button type="submit" class="btn btn-success">Save</button>  
				  <a class="btn btn-primary d-inline-block" href="<?= URLROOT ?>/posts/index"><i class="fa fa-backward"></i> Back</a>
				</form>
		  </div>
		</div>
	</div> 
</div>
<?php require_once APPROOT.'/views/inc/footer.php'; ?>   