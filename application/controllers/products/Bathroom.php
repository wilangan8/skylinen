<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bathroom extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
    $this->load->model('m_bathroom');
		$this->load->helper('url');
  }
  public function bathtowel()
  {
    $data['bathtowel'] = $this->m_bathroom->bathtowel()->result();

    $this->load->view('layouts/head');
    $this->load->view('products/bathroom/bathtowel', $data);
    $this->load->view('layouts/foot');
  }
  public function handtowel()
  {
    $data['handtowel'] = $this->m_bathroom->handtowel()->result();

    $this->load->view('layouts/head');
    $this->load->view('products/bathroom/handtowel', $data);
    $this->load->view('layouts/foot');
  }
  public function facetowel()
  {
    $data['facetowel'] = $this->m_bathroom->facetowel()->result();

    $this->load->view('layouts/head');
    $this->load->view('products/bathroom/facetowel', $data);
    $this->load->view('layouts/foot');
  }
  public function bathmat()
  {
    $data['bathmat'] = $this->m_bathroom->bathmat()->result();

    $this->load->view('layouts/head');
    $this->load->view('products/bathroom/bathmat', $data);
    $this->load->view('layouts/foot');
  }

  public function detail($id)
	{
		if(substr($id,0,2) == "bt"){
			$prod = "bathtowel";
		}elseif(substr($id,0,2) == "ht"){
			$prod = "handtowel";
		}elseif(substr($id,0,2) == "ft"){
			$prod = "facetowel";
		}else{
			$prod = "bathmat";
		}

    $where = array('id' => $id);
    $data = array(
      'detail' => $this->m_bathroom-> detail_product($where,'sky_prod_'. $prod .'')->row(),
      'prod' => $prod,
    );

		$this->load->view('layouts/head');
		$this->load->view('products/detail',$data);
		$this->load->view('layouts/foot');
	}
}