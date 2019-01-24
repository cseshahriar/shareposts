<?php require_once APPROOT.'/views/inc/header.php'; ?> 	
	<div class="card card-body mb-3">
		<h4 class="card-title"><?= $data['post']->title ?></h4> 
		<div class="bg-light p-2 mb3">
			Written by <strong><?= $data['user']->name ?></strong> on <?= $data['post']->created_at ?> 
		</div>
		<p class="card-text">
			<?= $data['post']->body ?> 
			<a class="btn btn-sm btn-info" href="<?= URLROOT ?>/posts/index">Back</a>    
		</p>

		<?php if($data['post']->user_id == $_SESSION['user_id']) : ?> 
			<hr>
			<a href="<?= URLROOT ?>/posts/edit/<?= $data['post']->id?>" class="btn btn-info sm d-inline-block" style="width: 80px;">Edit</a>
			<br>
			<form action="<?= URLROOT?>/posts/delete/<?= $data['post']->id?>" method="post" style="display: inline-block;"> 
				<button class="btn btn-warning" type="submit">Delete</button> 
			</form>
		<?php endif; ?>  
	</div>
<?php require_once APPROOT.'/views/inc/footer.php'; ?>      