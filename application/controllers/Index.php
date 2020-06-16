<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_bedlinen');
		$this->load->model('m_bedding');
		$this->load->model('m_bathroom');
		$this->load->model('m_kitchenanddining');
		$this->load->helper('url');
	}
	public function index()
	{
		if($this->input->get('search_query')){

			$keywoard = $this->input->get('search_query');

			$sheeting =  $this->m_bedlinen->sheeting()->result();
			$flatsheet =  $this->m_bedlinen->flatsheet()->result();
			$fittedsheet =  $this->m_bedlinen->fittedsheet()->result();
			$pillowcase =  $this->m_bedlinen->pillowcase()->result();
			$balstercase =  $this->m_bedlinen->balstercase()->result();
			$duvetcover =  $this->m_bedlinen->duvetcover()->result();

			$innerduvet =  $this->m_bedding->innerduvet()->result();
			$mattressprotector =  $this->m_bedding->mattressprotector()->result();
			$pillow =  $this->m_bedding->pillow()->result();
			$balster =  $this->m_bedding->balster()->result();
			$cushion =  $this->m_bedding->cushion()->result();

			$bathtowel =  $this->m_bathroom->bathtowel()->result();
			$handtowel =  $this->m_bathroom->handtowel()->result();
			$facetowel =  $this->m_bathroom->facetowel()->result();
			$bathmat =  $this->m_bathroom->bathmat()->result();

			$kitchenanddining =  $this->m_kitchenanddining->all_data()->result();

			$data = array(

				'keywoard' => $keywoard,
				
				'sheeting' => $sheeting,
				'flatsheet' => $flatsheet,
				'fittedsheet' => $fittedsheet,
				'pillowcase' => $pillowcase,
				'balstercase' => $balstercase,
				'duvetcover' => $duvetcover,

				'innerduvet' => $innerduvet,
				'mattressprotector' => $mattressprotector,
				'pillow' => $pillow,
				'balster' => $balster,
				'cushion' => $cushion,

				'bathtowel' => $bathtowel,
				'handtowel' => $handtowel,
				'facetowel' => $facetowel,
				'bathmat' => $bathmat,

				'kitchenanddining' => $kitchenanddining,

			);

			$this->load->view('layouts/head');
			$this->load->view('search/index',$data);
			$this->load->view('layouts/foot');

		}else{
			$this->load->view('layouts/head');
			$this->load->view('index');
			$this->load->view('layouts/foot');
		}
		
	}
}
