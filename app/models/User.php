<?php 
/**
 * User Model 
 */
class User extends Database 
{
	private $db;
	
	function __construct() 
	{
		$this->db = new Database; 
	}

	/**
	 * [findUserByEmail description]
	 * @param  [type] $email [description]
	 * @return [type] true   [description]
	 */
	public function findUserByEmail($email) 
	{
		$this->db->query('SELECT * FROM users WHERE email = :email'); 
		$this->db->bind(':email', $email); 

		$row = $this->db->single(); 
		
		// check row 
		if ($this->db->rowCount() > 0) {
			return true;
		} else {
			return false; 
		}
	}


	public function register($data)
	{
		$this->db->query('INSERT INTO users(name,email,password) VALUES(:name,:email,:password)');
		// Bind values
		$this->db->bind(':name', $data['name']);
		$this->db->bind(':email', $data['email']);
		$this->db->bind(':password', $data['password']);
		// Execute
		if($this->db->execute()) {
			return true;
		} else {
			return false;  
		}
	}


}