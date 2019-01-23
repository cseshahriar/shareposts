<?php 
/**
 * User Controller
 */
class Users extends Controller 
{
	
	function __construct()
	{
		$this->userModel = $this->model('User');
	}

	public function register()
	{
		// Check for POST
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			// process form 
			
			// sanitize post data
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 

			// init data 
			$data = [
				'name' => trim($_POST['name']),
				'email' => trim($_POST['email']), 
				'password' => trim($_POST['password']),
				'confirm_password' => trim($_POST['confirm_password']),
				'name_error' => '',
				'email_error' => '',
				'password_error' => '',
				'confirm_password_error' => '',
			];

			// validte name
			if (empty($data['name'])) {
				$data['name_error'] = 'Name is required.';
			}  

			// validate email 
			if (empty($data['email'])) {
				$data['email_error'] = 'Email is required.';
			} else {
				// valid email address 
				if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
					$data['email_error'] = 'Invalid Email Address.'; 
				}
				// already exist 
				if ($this->userModel->findUserByEmail($data['email'])) {
					$data['email_error'] = 'Email is aready taken.';
				} 
			}

			

			//validate password 
			if (empty($data['password'])) {
				$data['password_error'] = 'Password is required.';
			} elseif(strlen($data['password']) < 6) {
				$data['password_error'] = 'Password must be at least 6 characters.';
			}

			// conf password 
			if (empty($data['confirm_password'])) {
				$data['confirm_password_error'] = 'Confirm Password is required.'; 
			} else {
				if ($data['password'] != $data['confirm_password'] ) {
					$data['confirm_password_error'] = 'Password did not match.';   
				}
			}
 
			// Makes sure errors are empty 
			if ( empty($data['name_error']) && empty($data['email_error']) && empty($data['password_error']) && empty($data['confirm_password_error'])) {
				// validated 
				
			} else {
				// load view with errors 
				$this->view('users/register', $data); 
			}


		} else {  // if post not submit 
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

	public function login()
	{
		// Check for POST
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			# process form 
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
			// init data 
			$data = [
				'email' => trim($_POST['email']), 
				'password' => trim($_POST['password']),
				'name_error' => '',
				'email_error' => '',
				'password_error' => ''
			];

			// validate email 
			if (empty($data['email'])) {
				$data['email_error'] = 'Email is required.';
			} elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
				$data['email_error'] = 'Invalid Email Address.'; 
			}

			//validate password 
			if (empty($data['password'])) {
				$data['password_error'] = 'Password is required.';
			} elseif(strlen($data['password']) < 6) {
				$data['password_error'] = 'Password must be at least 6 characters.';
			} 

			// Makes sure errors are empty 
			if (empty($data['email_error']) && empty($data['password_error'])) {
				// validated 
				
			} else {
				// load view with errors 
				$this->view('users/login', $data);  
			}

		} else {
			// init data
			$data = [
				'email' => '', 
				'password' => '',
				'email_error' => '',
				'password_error' => '',
			];

			// load view 
			$this->view('users/login', $data);   
		}
	}
}