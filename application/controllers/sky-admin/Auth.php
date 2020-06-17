<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_settings');
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
				if($data->status == '0'){

					$data_session = array(
						'id' => $data->id,
						'name' => $data->name,
						'status' => "Logged-in"
					);
		
					$this->session->set_userdata($data_session);

					$login_log = array(
						'name_log' => $data->name,
						'date_log' => date('Y-m-d H:i:s')
					);

					$create_login_log = $this->m_settings->create($login_log,"sky_login_log");

					$data_status = array(
						'status' => '1',
					);
					
					$this->m_login->update_status($where,$data_status,"sky_user");
					
					redirect(base_url("sky-admin/dashboard"));
		
				}else{
					$this->session->set_flashdata('message','	<div class="alert alert-warning" role="alert">
																	Your account is online please reset status !
																</div>');
					redirect(base_url("sky-admin"));
				}
			}else{
				$this->session->set_flashdata('message','	<div class="alert alert-danger" role="alert">
																Your account has been blocked by administrator !
															</div>');
				redirect(base_url("sky-admin"));
			}
		}else{
			$this->session->set_flashdata('message','	<div class="alert alert-danger" role="alert">
															Username or Password Incorrect !
														</div>');
			redirect(base_url("sky-admin"));
		}
	}

	public function reset_status()
	{
		if($this->session->userdata('status') == "Logged-in"){
            redirect(base_url('sky-admin/dashboard'));
        }else{
			$this->load->view('sky_admin/sky_auth/reset');
		}
	}
	public function reset_status_post()
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

					$data_status = array(
						'status' => '0',
					);
					
					$this->m_login->update_status($where,$data_status,"sky_user");
					
					$this->session->set_flashdata('message','	<div class="alert alert-success" role="alert">
																	Your account can now be logged in !
																</div>');
					redirect(base_url("sky-admin"));
		
				}else{
					$this->session->set_flashdata('message','	<div class="alert alert-warning" role="alert">
																	Your account is already offline !
																</div>');
					redirect(base_url("sky-admin/reset-status"));
				}
			}else{
				$this->session->set_flashdata('message','	<div class="alert alert-danger" role="alert">
																Your account has been blocked by administrator !
															</div>');
				redirect(base_url("sky-admin/reset-status"));
			}
		}else{
			$this->session->set_flashdata('message','	<div class="alert alert-danger" role="alert">
															Username or Password Incorrect !
														</div>');
			redirect(base_url("sky-admin/reset-status"));
		}

	}

	public function logout()
	{
		$where = array(
			'id' => $this->session->userdata('id'),
		);

		$data_status = array(
			'status' => '0',
		);
		
		$this->m_login->update_status($where,$data_status,"sky_user");

		$this->session->sess_destroy();
		redirect(base_url('sky-admin'));
	}
}
