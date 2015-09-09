<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Model {

	public function post_message($post)
	{
		$posted_at = date("Y-m-d, H:i:sa");

		$query = "INSERT INTO posts (from_id, to_id, message, posted_at) VALUES (?,?,?,?)";
   		$values = array($post['from_id'], $post['to_id'], $post['message'], $posted_at);
   		return $this->db->query($query, $values);
	}

	public function post_reply($reply)
	{
		$replied_at = date("Y-m-d, H:i:sa");

		$query = "INSERT INTO replies (post_id, user_name, reply, replied_at) VALUES (?,?,?,?)";
   		$values = array($reply['post_id'], $reply['user_name'], $reply['reply'], $replied_at);
   		return $this->db->query($query, $values);
	}
}

//end of main controller