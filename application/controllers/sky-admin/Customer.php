<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_customer');
		$this->load->helper('url');
		if($this->session->userdata('status') != "Logged-in"){
            redirect(base_url('sky-admin'));
        }
	}
	public function index()
	{
		$waiting = array('status' => 'waiting');
		$completed = array('status' => 'completed');

		$table = 'sky_customer';

		$data = array(
			'title' => 'Customer',
			'waiting' => $this->m_customer->check($waiting,$table)->result(),
			'completed' => $this->m_customer->check($completed,$table)->result(),
		);

		$this->load->view('sky_admin/sky_layouts/sky_head',$data);
		$this->load->view('sky_admin/sky_layouts/sky_nav');
		$this->load->view('sky_admin/sky_layouts/sky_top_nav');
		$this->load->view('sky_admin/sky_customer/index');
		$this->load->view('sky_admin/sky_layouts/sky_footer');
	}
}
