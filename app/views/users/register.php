<?php require_once APPROOT.'/views/inc/header.php'; ?> 	   
<div class="row">
<div class="col-lg-6 mx-auto">
	<div class="card" style="width: 30rem;">
		 <div class="card-body">
		    <h5 class="card-title">Create An Account</h5>   
			<form action="" method=""> 
				  <div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control" placeholder="Name">
				  </div>

				  <div class="form-group">
				    <label for="email">Email address</label>
				    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> 
				  </div>

				  <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
				  </div>

				  <div class="form-group">
				    <label for="password">Confirm Password</label>
				    <input type="password" name="confirm_password" class="form-control" id="password" placeholder="Confirm Password">
				  </div> 
				<button type="submit" class="btn btn-success">Save</button>  
			</form>
		</div>
	</div> 
</div>
	</div>
</div>
<?php require_once APPROOT.'/views/inc/footer.php'; ?>   