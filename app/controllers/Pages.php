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
			'title' => 'SharePosts', 
			'description' => 'Simple social network built on the SMVC PHP Framework'
		]; 
		$this->view('pages/index', $data);          
	} 

	public function about()
	{
		$data = [
			'title' => 'About Us',
			'description' => 'App to share posts with others users' 
		]; 
		$this->view('pages/about', $data);  
	}
}