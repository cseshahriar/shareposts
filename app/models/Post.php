<?php 
/**
 * 
 */
class Post extends Database
{
	private $db; 
	function __construct()
	{
		$this->db = new Database; 
	}

	public function getPost()
	{
		$this->db->query("SELECT *, posts.id as postId, users.id as userId, posts.created_at as pcreated_at
						FROM posts
						INNER JOIN users
						ON posts.user_id = users.id
						ORDER BY posts.created_at DESC"   
					);
		$result = $this->db->resultSet();
		return $result;  
	} 
}