<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profiles extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
		$this->load->model('profile');
	}

	public function show_profile($id)
	{
		$user = $this->profile->get_user_by_id($id);

		if($user)
		{
			$posts['posts'] = $this->profile->get_all_post_to_user($id);

			$this->session->set_userdata($user);
			$this->load->view('Profile', $posts);
		}
	}

	public function user_info($id)
	{
		$user = $this->profile->get_user_by_id($id);

		if($user)
		{
			$posts['posts'] = $this->profile->get_all_post_to_user($id);
	        $this->session->set_userdata($user);
			$this->load->view('User_Information', $posts);
		}
	}

	public function edit_profile($id)
	{
		$get_user['user_data'] = $this->profile->get_user_by_id($id);
		$this->load->view('/edit_profile', $get_user);
	}

	public function update_userdata()
	{
		$user_info = $this->input->post();
		$update_userdata = $this->profile->update_userdata($user_info);

		if($update_userdata)
			redirect('/admin_dashboard');
		else
			echo "failed";
	}

	public function update_password()
	{
		$userpassword = $this->input->post();
		$update_password = $this->profile->update_password($userpassword);
		
		if($update_password)
			echo "Password update success. <a href='/admin_dashboard'>ADMIN DASHBOARD</a>";
	}

	public function edit_user($id)
	{
		$get_user['user_data'] = $this->profile->get_user_by_id($id);
		$this->load->view('/edit_user', $get_user);
	}

	public function update_profile()
	{
		$user_info = $this->input->post();
		$update_userdata = $this->profile->update_userdata($user_info);

		if($update_userdata)
			redirect('/user_dashboard');
		else
			echo "failed";
	}

	public function update_userpassword()
	{
		$userpassword = $this->input->post();
		$update_password = $this->profile->update_password($userpassword);
		
		if($update_password)
			echo "Password update success. <a href='/user_dashboard'>USER DASHBOARD</a>";
	}

	public function update_description()
	{
		$userdescription = $this->input->post();
		$update_description = $this->profile->update_description($userdescription);
		
		if($update_description)
			echo "Description update success. <a href='/user_dashboard'>USER DASHBOARD</a>";
	}
}

//end of main controller