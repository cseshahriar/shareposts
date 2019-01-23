<?php 
/**
 * Post Controller  
 */
class Posts extends Controller
{
	
	function __construct()
	{
		if (!isLoggedIn()) {
			redirect('users/login');   
		}

		$this->postModel = $this->model('Post'); // post model load 
	}

	public function index()
	{
		$posts = $this->postModel->getPost();
		$data = [
			'posts' => $posts
		];
		$this->view('posts/index', $data); 
	}
}