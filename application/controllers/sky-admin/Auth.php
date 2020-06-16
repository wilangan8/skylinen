<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->helper('url');
	}
	public function index()
	{
		if($this->session->userdata('status') == "Logged-in"){
            redirect(base_url('sky-admin/dashboard'));
        }else{
			$this->load->view('sky_admin/sky_auth/login');
		}
	}

	public function postlogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => md5($password)
			);

		$data = $this->m_login->check("sky_user",$where)->row();
		$check = $this->m_login->check("sky_user",$where)->num_rows();
			
		if($check > 0){
			if($data->hak == "Y"){
				if($data->status == '1'){

					$data_session = array(
						'name' => $data->name,
						'status' => "Logged-in"
						);
		
					$this->session->set_userdata($data_session);
		
					redirect(base_url("sky-admin/dashboard"));
		
				}else{
					echo "Your account is online please contact administrator !";
				}
			}else{
				echo "Your account has been blocked by administrator !";
			}
		}else{
			echo "Username or Password Incorrect !";
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('sky-admin'));
	}
}
