<?php 
/**
 * 
 */
class Users extends Controller
{
	
	function __construct()
	{
	}

	public function register()
	{
		// Check for POST
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			# process form 
		} else {
			// init data
			$data = [
				'name' => '',
				'email' => '', 
				'password' => '',
				'confirm_password' => '',
				'name_error' => '',
				'email_error' => '',
				'password_error' => '',
				'confirm_password_error' => '',
			];

			// load view 
			$this->view('users/register', $data); 
		}
	}
}