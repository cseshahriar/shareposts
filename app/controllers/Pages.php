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
		]; 
		$this->view('pages/index', $data);          
	} 
}