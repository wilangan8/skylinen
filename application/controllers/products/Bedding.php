<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bedding extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_bedding');
		$this->load->helper('url');
    }
    public function innerduvet()
	{
		$data['innerduvet'] = $this->m_bedding->innerduvet()->result();

		$this->load->view('layouts/head');
		$this->load->view('products/bedroom/bedding/innerduvet', $data);
		$this->load->view('layouts/foot');
	}
	public function mattressprotector()
	{
		$data['mattressprotector'] = $this->m_bedding->mattressprotector()->result();

		$this->load->view('layouts/head');
		$this->load->view('products/bedroom/bedding/mattressprotector', $data);
		$this->load->view('layouts/foot');
	}
	public function pillow()
	{
		$data['pillow'] = $this->m_bedding->pillow()->result();

		$this->load->view('layouts/head');
		$this->load->view('products/bedroom/bedding/pillow', $data);
		$this->load->view('layouts/foot');
	}
	public function balster()
	{
		$data['balster'] = $this->m_bedding->balster()->result();

		$this->load->view('layouts/head');
		$this->load->view('products/bedroom/bedding/balster', $data);
		$this->load->view('layouts/foot');
	}
	public function cushion()
	{
		$data['cushion'] = $this->m_bedding->cushion()->result();

		$this->load->view('layouts/head');
		$this->load->view('products/bedroom/bedding/cushion', $data);
		$this->load->view('layouts/foot');
	}
    
	public function detail($id)
	{
		if(substr($id,0,2) == "id"){
			$prod = "innerduvet";
		}elseif(substr($id,0,2) == "mp"){
			$prod = "mattressprotector";
		}elseif(substr($id,0,2) == "pl"){
			$prod = "pillow";
		}elseif(substr($id,0,2) == "bs"){
			$prod = "balster";
		}else{
			$prod = "cushion";
		}

		$where = array('id' => $id);
		$data = array(
			'detail' =>	$this->m_bedding-> detail_product($where,'sky_prod_'. $prod .'')->row(),
			'prod' => $prod,
		);

		$this->load->view('layouts/head');
		$this->load->view('products/detail',$data);
		$this->load->view('layouts/foot');
	}
}