<?php 
/**
 * Post Controller  
 */
class Posts extends Controller
{
	
	public function __construct()  
	{
		if (!isLoggedIn()) {
			redirect('users/login');   
		}

		$this->postModel = $this->model('Post'); // post model load 
		$this->userModel = $this->model('User'); // post model load   
	}

	public function index()
	{
		$posts = $this->postModel->getPost();  
		$data = [
			'posts' => $posts
		];
		$this->view('posts/index', $data); 
	}

	public function create()
	{    // if form submit or post request
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			$data = [
				'title' => trim($_POST['title']),
				'body'	=> trim($_POST['body']), 
				'user_id' => $_SESSION['user_id'], 
				'title_error' => '',
				'body_error' => ''
			];      

			//validation 
			if (empty($data['title'])) {
				$data['title_error'] = 'Title is required'; 
			}      
			if (empty($data['body'])) {
				$data['body_error'] = 'Body is required'; 
			}   

			// make sure no errors 
			if ( empty($data['title_error']) && empty($data['body_error']) ) { 
				// process form data 
				if ($this->postModel->create($data)) {
					flash('post_created', 'Post successfuly created');
					redirect('posts/index'); 
				} else {
					die('Something went wrong');  
				}
			} else {
				// load view with errors 
				$this->view('posts/create',$data);   
			}

		} else { // if get request 
			$data = [
				'title' => '',
				'body' => ''
			];
			$this->view('posts/create',$data); 
		}
	}

	public function show($id) 
	{
		$post = $this->postModel->getPostById($id);  
		$user = $this->userModel->getUserById($post->user_id);     
		$data = [
			'post' => $post,
			'user' => $user
		];
		$this->view('posts/show', $data);     
	}
}