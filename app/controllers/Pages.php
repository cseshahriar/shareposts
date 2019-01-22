<?php 

/**
 * default controller 
 */
class Pages extends Controller
{
	
	function __construct() 
	{
		// the constructore 
	}

	// default method must have 
	public function index() 
	{   
		$data = [
			'title' => 'Welcome', 
		]; 
		$this->view('pages/index', $data);         
	}

	public function about()
	{
		$data = [
			'title' => 'About'
		];
		$this->view('pages/about', $data);    
	}
}