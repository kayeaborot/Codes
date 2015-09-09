<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

	public function get_all_users()
	{
		return $this->db->query("SELECT * FROM users", array())->result_array();
	}

	public function get_user_by_id($id)
	{
		return $this->db->query("SELECT * FROM users WHERE id = ?", $id)->row_array();
	}

	public function update_userdata($user_info)
	{
		$query = "UPDATE users SET first_name=?, last_name=?, email=?, user_level=? WHERE id = ?";
		$values = array($user_info['first_name'], $user_info['last_name'], $user_info['email'], $user_info['user_level'], $user_info['id']);
		return $this->db->query($query, $values); 
	}
	
	public function update_password($userpassword)
	{
		$query = "UPDATE users SET password=? WHERE id = ?";
		$values = array($userpassword['password'], $userpassword['id']);
		return $this->db->query($query, $values); 
	}

	public function update_description($userdescription)
	{
		$query = "UPDATE users SET description=? WHERE id = ?";
		$values = array($userdescription['description'], $userdescription['id']);
		return $this->db->query($query, $values); 
	}

	public function get_all_post_to_user($id)
	{
		return $this->db->query("SELECT * FROM posts WHERE to_id = ?", $id)->result_array();
	}

	public function get_all_replies_to_post_by_postid($post_id)
	{
		return $this->db->query("SELECT * FROM replies WHERE post_id = ?", $post_id)->result_array();
	}
}

//end of main controller