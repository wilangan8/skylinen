<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_bedlinen');
		$this->load->model('m_bedding');
		$this->load->model('m_bathroom');
		$this->load->model('m_kitchenanddining');
		$this->load->helper('url');
		if($this->session->userdata('status') != "Logged-in"){
            redirect(base_url('sky-admin'));
        }
	}
	public function index()
	{
		$sheeting =  $this->m_bedlinen->sheeting()->num_rows();
		$flatsheet =  $this->m_bedlinen->flatsheet()->num_rows();
		$fittedsheet =  $this->m_bedlinen->fittedsheet()->num_rows();
		$pillowcase =  $this->m_bedlinen->pillowcase()->num_rows();
		$balstercase =  $this->m_bedlinen->balstercase()->num_rows();
		$duvetcover =  $this->m_bedlinen->duvetcover()->num_rows();

		$innerduvet =  $this->m_bedding->innerduvet()->num_rows();
		$mattressprotector =  $this->m_bedding->mattressprotector()->num_rows();
		$pillow =  $this->m_bedding->pillow()->num_rows();
		$balster =  $this->m_bedding->balster()->num_rows();
		$cushion =  $this->m_bedding->cushion()->num_rows();

		$bathtowel =  $this->m_bathroom->bathtowel()->num_rows();
		$handtowel =  $this->m_bathroom->handtowel()->num_rows();
		$facetowel =  $this->m_bathroom->facetowel()->num_rows();
		$bathmat =  $this->m_bathroom->bathmat()->num_rows();

		$kitchenanddining =  $this->m_kitchenanddining->all_data()->num_rows();

		$data = array(
			'title' => 'Dashboard',
			'bedlinen_count' => $sheeting + $flatsheet + $fittedsheet + $pillowcase + $balstercase + $duvetcover,
			'bedding_count' => $innerduvet + $mattressprotector + $pillow + $balster + $cushion,
			'bathroom_count' => $bathtowel + $handtowel + $facetowel + $bathmat,
			'kitchenanddining_count' => $kitchenanddining,
		);

		$this->load->view('sky_admin/sky_layouts/sky_head',$data);
		$this->load->view('sky_admin/sky_layouts/sky_nav');
		$this->load->view('sky_admin/sky_layouts/sky_top_nav');
		$this->load->view('sky_admin/sky_dashboard/index');
		$this->load->view('sky_admin/sky_layouts/sky_footer');
	}
}
