<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */




	public function index()
	{
		if (isset($_POST['login'])) {

			$user_mobile = $this->input->post('phone');
			$password = $this->input->post('password');

			$result = $this->crud->selectbymultiplecolumn(
				'admin',
				array('phone' => $user_mobile, 'password' => $password)
			);

			if (count($result) > 0) {
				$this->session->set_userdata('name', $result[0]->name);
				$this->session->set_userdata('phone', $result[0]->phone);
				$this->session->set_userdata('email', $result[0]->email);
				 

				redirect('admin/dashboard');
			} else {
				echo '<script>alert("Invaid Credentials")</script>';
			}
		}

		$this->load->view('admin/index');
	}


	public function dashboard()
	{
		$this->checkadminlogin();
		$this->load->view('admin/dashboard');
	}

	

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/index');

 	}


	 public function checkadminlogin()
	 {
		 $data=$this->session->userdata('phone');
		 if(empty($data))
		 {
			 redirect('admin/index');
  
		 }
		}



}
