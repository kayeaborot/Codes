<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
		$this->load->model('post');
	}

	public function post_message()
	{
		$post = $this->input->post();
		$post_message = $this->post->post_message($post);

		if($post_message)
		{
			echo "Message posted. <a href='/show_profile/" . $this->session->userdata('id') . "'>GO BACK</a>";
		}
	}

	public function post_reply()
	{
		$reply = $this->input->post();
		$post_reply = $this->post->post_reply($reply);

		if($post_reply)
		{
			echo "Reply posted. <a href='/show_profile/" . $this->session->userdata('id') . "'>GO BACK</a>";
		}
	}
}

//end of main controller