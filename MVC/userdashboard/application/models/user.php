<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {
	
	public function get_all_users()
	{
		return $this->db->query("SELECT * FROM users", array())->result_array();
	}

	public function get_user_by_id($id)
	{
		return $this->db->query("SELECT * FROM users WHERE id = ?", $id)->row_array();
	}
	
	public function get_user_by_email($email)
	{
		return $this->db->query("SELECT * FROM users WHERE email = ?", $email)->row_array();
	}

	public function add_user($user)
	{
		$user_level = 'Normal';
		$date = date("Y-m-d, H:i:s");

		$query = "INSERT INTO users (first_name, last_name, email, description, password, user_level, created_at) VALUES (?,?,?,?,?,?,?)";
   		$values = array($user['first_name'], $user['last_name'], $user['email'], $user['description'], $user['password'], $user_level, $date);
   		return $this->db->query($query, $values);
	}

	public function delete_user_by_id($id)
   	{
      	return $this->db->query("DELETE FROM users WHERE id = ?", $id);
   	}
}

//end of main controller