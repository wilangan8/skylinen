<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bathroom extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_bathroom');
		$this->load->helper(array('form', 'url'));
		if($this->session->userdata('status') != "Logged-in"){
            redirect(base_url('sky-admin'));
        }
	}
	public function index()
	{
		$data = array(
			'title' => 'Bathroom',
			'bathtowel' => $this->m_bathroom->bathtowel()->result(),
			'handtowel' => $this->m_bathroom->handtowel()->result(),
			'facetowel' => $this->m_bathroom->facetowel()->result(),
			'bathmat' => $this->m_bathroom->bathmat()->result(),
		);

		$this->load->view('sky_admin/sky_layouts/sky_head', $data);
		$this->load->view('sky_admin/sky_layouts/sky_nav');
		$this->load->view('sky_admin/sky_layouts/sky_top_nav');
		$this->load->view('sky_admin/sky_products/sky_bathroom/index');
		$this->load->view('sky_admin/sky_layouts/sky_footer');
	}

	public function add_product($product)
	{

		if($product == "bathtowel"){
			$check = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_bathtowel')->num_rows();
			$no = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_bathtowel')->row();
			if($check > 0){
				$newNo = substr($no->id,3)+1;
				$id = 'BT-'. sprintf("%04s", $newNo) .'';
			}else{
				$id = 'BT-0001';
			}
			

			$newProduct = 'Bath Towel';
		}elseif($product == "handtowel"){
			$check = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_handtowel')->num_rows();
			$no = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_handtowel')->row();
			if($check > 0){
				$newNo = substr($no->id,3)+1;
				$id = 'HT-'. sprintf("%04s", $newNo) .'';
			}else{
				$id = 'HT-0001';
			}
			

			$newProduct = 'Hand Towel';
		}elseif($product == "facetowel"){
			$check = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_facetowel')->num_rows();
			$no = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_facetowel')->row();
			if($check > 0){
				$newNo = substr($no->id,3)+1;
				$id = 'FT-'. sprintf("%04s", $newNo) .'';
			}else{
				$id = 'FT-0001';
			}
			

			$newProduct = 'Face Towel';
		}else{
			$check = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_bathmat')->num_rows();
			$no = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_bathmat')->row();
			if($check > 0){
				$newNo = substr($no->id,3)+1;
				$id = 'BM-'. sprintf("%04s", $newNo) .'';
			}else{
				$id = 'BM-0001';
			}
			

			$newProduct = 'Bathmat';
		}

		$data = array (
			'title' => 'Create Product '. $newProduct .'',
			'id' => $id,
			'link' => $product,
		);

		$this->load->view('sky_admin/sky_layouts/sky_head', $data);
		$this->load->view('sky_admin/sky_layouts/sky_nav');
		$this->load->view('sky_admin/sky_layouts/sky_top_nav');
		$this->load->view('sky_admin/sky_products/sky_crud/add');
		$this->load->view('sky_admin/sky_layouts/sky_footer');
	}

	public function add_product_post($product)
	{

		$config['upload_path']          = './upload/bathroom/'. $product .'/'. $this->input->post('id') .'';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 8000;
		$config['max_width']            = 1920;
		$config['max_height']           = 1080;
 
		$this->load->library('upload', $config);
		$this->upload->overwrite = true;

		if (!is_dir('./upload/bathroom/'. $product .'/'. $this->input->post('id') .'')) {
			mkdir('./upload/bathroom/'. $product .'/'. $this->input->post('id') .'',0777,TRUE);
		}
		if ($this->upload->do_upload('product_img_1')) {
			$upload_data_1 =  $this->upload->data();
		}
		if ($this->upload->do_upload('product_img_2')) {
			$upload_data_2 =  $this->upload->data();
		}
		if ($this->upload->do_upload('product_img_3')) {
			$upload_data_3 =  $this->upload->data();
		}
		

		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$mini_detail = $this->input->post('mini_detail');
		$full_detail = $this->input->post('full_detail');
		$material_title = $this->input->post('material_title');
		$material_desc = $this->input->post('material_desc');
		$origin_title = $this->input->post('origin_title');
		$origin_desc = $this->input->post('origin_desc');
		$product_img_1 = $upload_data_1['file_name'];
		$product_img_2 = $upload_data_2['file_name'];
		$product_img_3 = $upload_data_3['file_name'];
		$status = 'yes';

		if(substr($id,0,2) == "BT"){
			$prod = "bathtowel";
		}elseif(substr($id,0,2) == "HT"){
			$prod = "handtowel";
		}elseif(substr($id,0,2) == "FT"){
			$prod = "facetowel";
		}else{
			$prod = "bathmat";
		}
	
		$data = array(
			'id' => $id,
			'name' => $name,
			'mini_detail' => $mini_detail,
			'full_detail' => $full_detail,
			'material_title' => $material_title,
			'material_desc' => $material_desc,
			'origin_title' => $origin_title,
			'origin_desc' => $origin_desc,
			'product_img_1' => $product_img_1,
			'product_img_2' => $product_img_2,
			'product_img_3' => $product_img_3,
			'status' => $status,
			);
		$this->m_bathroom->create_product($data,'sky_prod_'. $prod .'');

		redirect(base_url('sky-admin/products/bathroom'));
		
	}

	public function edit_product($id)
	{

		if(substr($id,0,2) == "BT"){
			$prod = "bathtowel";
			$newProduct = "Bath Towel";
		}elseif(substr($id,0,2) == "HT"){
			$prod = "handtowel";
			$newProduct = "Hand Towel";
		}elseif(substr($id,0,2) == "FT"){
			$prod = "facetowel";
			$newProduct = "Face Towel";
		}else{
			$prod = "bathmat";
			$newProduct = "Bathmat";
		}

		$where = array('id' => $id);
		$data = array(
			'title' => 'Edit Product '. $newProduct .' ('. $id .')',
			'row' => $this->m_bathroom->edit_product($where,'sky_prod_'. $prod .'')->row(),
		);

		$this->load->view('sky_admin/sky_layouts/sky_head', $data);
		$this->load->view('sky_admin/sky_layouts/sky_nav');
		$this->load->view('sky_admin/sky_layouts/sky_top_nav');
		$this->load->view('sky_admin/sky_products/sky_crud/edit');
		$this->load->view('sky_admin/sky_layouts/sky_footer');
		
	}

	public function update_product($id)
	{

		if(substr($id,0,2) == "BT"){
			$prod = "bathtowel";
		}elseif(substr($id,0,2) == "HT"){
			$prod = "handtowel";
		}elseif(substr($id,0,2) == "FT"){
			$prod = "facetowel";
		}else{
			$prod = "bathmat";
		}

		$where = array('id' => $id);

		$config['upload_path']          = './upload/bathroom/'. $prod .'/'. $this->input->post('id') .'';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 8000;
		$config['max_width']            = 1920;
		$config['max_height']           = 1080;
 
		$this->load->library('upload', $config);
		$this->upload->overwrite = true;

		if (!is_dir('./upload/bathroom/'. $prod .'/'. $this->input->post('id') .'')) {
			mkdir('./upload/bathroom/'. $prod .'/'. $this->input->post('id') .'',0777,TRUE);
		}
		if ($this->upload->do_upload('product_img_1'))
		{
			$upload_data_1 =  $this->upload->data();
			$product_img_1 = $upload_data_1['file_name'];
			$img_1 = array(
				'product_img_1' => $product_img_1,
			);
			$this->m_bathroom->update_product($where,$img_1,'sky_prod_'. $prod .'');
		}
		if ($this->upload->do_upload('product_img_2'))
		{
			$upload_data_2 =  $this->upload->data();
			$product_img_2 = $upload_data_2['file_name'];
			$img_2 = array(
				'product_img_2' => $product_img_2,
			);
			$this->m_bathroom->update_product($where,$img_2,'sky_prod_'. $prod .'');
		}
		if ($this->upload->do_upload('product_img_3'))
		{
			$upload_data_3 =  $this->upload->data();
			$product_img_3 = $upload_data_3['file_name'];
			$img_3 = array(
				'product_img_3' => $product_img_3,
			);
			$this->m_bathroom->update_product($where,$img_3,'sky_prod_'. $prod .'');
		}
		

		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$mini_detail = $this->input->post('mini_detail');
		$full_detail = $this->input->post('full_detail');
		$material_title = $this->input->post('material_title');
		$material_desc = $this->input->post('material_desc');
		$origin_title = $this->input->post('origin_title');
		$origin_desc = $this->input->post('origin_desc');
		$status = $this->input->post('status');
	
		$data = array(
			'id' => $id,
			'name' => $name,
			'mini_detail' => $mini_detail,
			'full_detail' => $full_detail,
			'material_title' => $material_title,
			'material_desc' => $material_desc,
			'origin_title' => $origin_title,
			'origin_desc' => $origin_desc,
			'status' => $status,
			);
		$this->m_bathroom->update_product($where,$data,'sky_prod_'. $prod .'');

		redirect(base_url('sky-admin/products/bathroom'));
		
	}

	public function delete(){

		$id = $this->input->post('id');

		if(substr($id,0,2) == "BT"){
			$prod = "bathtowel";
		}elseif(substr($id,0,2) == "HT"){
			$prod = "handtowel";
		}elseif(substr($id,0,2) == "FT"){
			$prod = "facetowel";
		}else{
			$prod = "bathmat";
		}

		$where = array('id' => $id);
		$hapus = $this->m_bathroom->delete_product($where,'sky_prod_'. $prod .'');
		if($hapus){
			echo true;
		} else {
			echo false;
		}
	}
}
