<?php require_once APPROOT.'/views/inc/header.php'; ?> 	
<div class="row">
	<div class="col-lg-6">
		<h1>Posts</h1>
	</div>
	<div class="col-lg-6">
		<a href="<?= URLROOT ?>/posts/create" class="btn btn-primary float-right">
		<i class="fa fa-pencil-square"></i>
		Create a new post
		</a>
	</div>
</div>
<?php foreach ($data['posts'] as $post) : ?>
	<div class="card card-body mb-3">
		<h4 class="card-title"><?= $post->title ?></h4> 
		<div class="bg-light p-2 mb3">
			Written by <strong><?= $post->name ?></strong> on <?= $post->pcreated_at ?> 
		</div>
		<p class="card-text">
			<?= $post->body ?>
			<a class="btn btn-sm btn-info" href="<?= RULROOT ?>/posts/show/<?= $post->postId ?>">Read More[...]</a> 
		</p>
	</div>
<?php endforeach; ?>
<?php require_once APPROOT.'/views/inc/footer.php'; ?>   