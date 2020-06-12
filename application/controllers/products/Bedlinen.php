<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bedlinen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_bedlinen');
		$this->load->helper('url');
    }
	public function sheeting()
	{	
		$data['sheeting'] = $this->m_bedlinen->sheeting()->result();
		
		$this->load->view('layouts/head');
		$this->load->view('products/bedroom/bedlinen/sheeting', $data);
		$this->load->view('layouts/foot');
	}
	public function flatsheet()
	{
		$data['flatsheet'] = $this->m_bedlinen->flatsheet()->result();

		$this->load->view('layouts/head');
		$this->load->view('products/bedroom/bedlinen/flatsheet', $data);
		$this->load->view('layouts/foot');
	}
	public function fittedsheet()
	{
		$data['fittedsheet'] = $this->m_bedlinen->fittedsheet()->result();

		$this->load->view('layouts/head');
		$this->load->view('products/bedroom/bedlinen/fittedsheet', $data);
		$this->load->view('layouts/foot');
	}
	public function pillowcase()
	{
		$data['pillowcase'] = $this->m_bedlinen->pillowcase()->result();

		$this->load->view('layouts/head');
		$this->load->view('products/bedroom/bedlinen/pillowcase', $data);
		$this->load->view('layouts/foot');
	}
	public function balstercase()
	{
		$data['balstercase'] = $this->m_bedlinen->balstercase()->result();

		$this->load->view('layouts/head');
		$this->load->view('products/bedroom/bedlinen/balstercase', $data);
		$this->load->view('layouts/foot');
	}
	public function duvetcover()
	{
		$data['duvetcover'] = $this->m_bedlinen->duvetcover()->result();

		$this->load->view('layouts/head');
		$this->load->view('products/bedroom/bedlinen/duvetcover', $data);
		$this->load->view('layouts/foot');
	}

	public function detail($id)
	{
		if(substr($id,0,2) == "sh"){
			$prod = "sheeting";
		}elseif(substr($id,0,2) == "fs"){
			$prod = "flatsheet";
		}elseif(substr($id,0,3) == "fts"){
			$prod = "fittedsheet";
		}elseif(substr($id,0,2) == "pc"){
			$prod = "pillowcase";
		}elseif(substr($id,0,2) == "bc"){
			$prod = "balstercase";
		}else{
			$prod = "duvetcover";
		}

		$where = array('id' => $id);
		$data = array(
			'detail' => $this->m_bedlinen->detail_product($where,'sky_prod_'. $prod .'')->row(),
			'prod' => $prod,
		);

		$this->load->view('layouts/head');
		$this->load->view('products/detail',$data);
		$this->load->view('layouts/foot');
	}
}