<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
		$this->load->model('user');
	}

	public function index()
	{
		$this->load->view('home_page');
	}

	public function login()
	{
		$this->load->view('Signin');
	}

	public function signin_user()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->user->get_user_by_email($email);
		
        if($user &&  $user['password'] == $password)
        {
        	$name = $user['first_name'] ." ". $user['last_name'];
        	$this->session->set_userdata('current_userID', $user['id']);
        	$this->session->set_userdata('current_user', $name);
        	$this->session->set_userdata('user_type', $user['user_level']);
        	$this->session->set_userdata($user);

        	redirect('/show_dashboard');
        }
        else
        {
            $this->session->set_flashdata("login_error", "Invalid email or password!");
           
            redirect("/index");
        }
	}

	public function register()
	{
		$this->load->view('Register');
	}

	public function register_user()
	{
		$register_user['user'] = $this->user->add_user($this->input->post());
		
		if($register_user)
			redirect('/login');
	}

	public function create_user()
	{
		$this->load->view('New_User');
	}

	public function add_user()
	{
		$add_user['user'] = $this->user->add_user($this->input->post());
		
		if($add_user)
			redirect('/admin_dashboard');
	}

	public function show_dashboard()
	{
		$get_users['users'] = $this->user->get_all_users();

		if($this->session->userdata('user_type') == 'Admin')
			$this->load->view('/admin_dashboard', $get_users);
		else
			$this->load->view('/user_dashboard', $get_users);
	}

	public function remove_user($id)
	{
		$delete_user = $this->user->delete_user_by_id($id);

		if($delete_user)
			redirect('/admin_dashboard');
	}

	public function logout()
	{
		$this->session->sess_destroy();
        redirect("/index"); 
	}
}

//end of main controller