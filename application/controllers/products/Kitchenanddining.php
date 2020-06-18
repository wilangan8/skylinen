<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kitchenanddining extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kitchenanddining');
		$this->load->helper('url');
    }
	public function index()
	{
		$data['kitchenanddining'] = $this->m_kitchenanddining->all_data()->result();

		$this->load->view('layouts/head');
		$this->load->view('products/kitchenanddining/index', $data);
		$this->load->view('layouts/foot');
	}

	public function detail($id)
	{
		$where = array('id' => $id);
		$data = array(
			'detail' => $this->m_kitchenanddining->detail_product($where,'sky_prod_kitchenanddining')->row(),
			'prod' => '',
		);

		$this->load->view('layouts/head');
		$this->load->view('products/detail',$data);
		$this->load->view('layouts/foot');
	}
}