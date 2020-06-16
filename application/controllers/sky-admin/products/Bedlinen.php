<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bedlinen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_bedlinen');
		$this->load->helper(array('form', 'url'));
		if($this->session->userdata('status') != "Logged-in"){
            redirect(base_url('sky-admin'));
        }
	}
	public function index()
	{

		$data = array (
			'title' => 'Bed Linen',
			'sheeting' => $this->m_bedlinen->sheeting()->result(),
			'flatsheet' => $this->m_bedlinen->flatsheet()->result(),
			'fittedsheet' => $this->m_bedlinen->fittedsheet()->result(),
			'pillowcase' => $this->m_bedlinen->pillowcase()->result(),
			'balstercase' => $this->m_bedlinen->balstercase()->result(),
			'duvetcover' => $this->m_bedlinen->duvetcover()->result(),
		);

		$this->load->view('sky_admin/sky_layouts/sky_head', $data);
		$this->load->view('sky_admin/sky_layouts/sky_nav');
		$this->load->view('sky_admin/sky_layouts/sky_top_nav');
		$this->load->view('sky_admin/sky_products/sky_bedlinen/index');
		$this->load->view('sky_admin/sky_layouts/sky_footer');
	}

	public function add_product($product)
	{

		if($product == "sheeting"){
			$check = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_sheeting')->num_rows();
			$no = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_sheeting')->row();
			if($check > 0){
				$newNo = substr($no->id,3)+1;
				$id = 'sh-'. $newNo .'';
			}else{
				$id = 'sh-1';
			}

			$newProduct = 'Sheeting';
		}elseif($product == "flatsheet"){
			$check = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_flatsheet')->num_rows();
			$no = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_flatsheet')->row();
			if($check > 0){
				$newNo = substr($no->id,3)+1;
				$id = 'fs-'. $newNo .'';
			}else{
				$id = 'fs-1';
			}

			$newProduct = 'Flat Sheet';
		}elseif($product == "fittedsheet"){
			$check = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_fittedsheet')->num_rows();
			$no = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_fittedsheet')->row();			if($check > 0){
				$id = 'fts-'. $newNo .'';
				$newNo = substr($no->id,4)+1;

			}else{
				$id = 'fts-1';
			}

			$newProduct = 'Fitted Sheet';
		}elseif($product == "pillowcase"){
			$check = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_pillowcase')->num_rows();
			$no = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_pillowcase')->row();
			if($check > 0){
				$newNo = substr($no->id,3)+1;
				$id = 'pc-'. $newNo .'';
			}else{
				$id = 'pc-1';
			}

			$newProduct = 'Pillow Case';
		}elseif($product == "balstercase"){
			$check = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_balstercase')->num_rows();
			$no = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_balstercase')->row();
			if($check > 0){
				$newNo = substr($no->id,3)+1;
				$id = 'bc-'. $newNo .'';
			}else{
				$id = 'bc-1';
			}

			$newProduct = 'Balster Case';
		}else{
			$check = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_duvetcover')->num_rows();
			$no = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_duvetcover')->row();
			if($check > 0){
				$newNo = substr($no->id,3)+1;
				$id = 'dc-'. $newNo .'';
			}else{
				$id = 'dc-1';
			}

			$newProduct = 'Duvet Cover';
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

		$config['upload_path']          = './upload/bedlinen/'. $product .'/'. $this->input->post('id') .'';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 8000;
		$config['max_width']            = 1920;
		$config['max_height']           = 1080;
 
		$this->load->library('upload', $config);
		$this->upload->overwrite = true;

		if (!is_dir('./upload/bedlinen/'. $product .'/'. $this->input->post('id') .'')) {
			mkdir('./upload/bedlinen/'. $product .'/'. $this->input->post('id') .'',0777,TRUE);
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
		$this->m_bedlinen->create_product($data,'sky_prod_'. $prod .'');

		redirect(base_url('sky-admin/products/bedlinen'));
		
	}

	public function edit_product($id)
	{

		if(substr($id,0,2) == "sh"){
			$prod = "sheeting";
			$newProduct = "Sheeting";
		}elseif(substr($id,0,2) == "fs"){
			$prod = "flatsheet";
			$newProduct = "Flat Sheet";
		}elseif(substr($id,0,3) == "fts"){
			$prod = "fittedsheet";
			$newProduct = "Fitted Sheet";
		}elseif(substr($id,0,2) == "pc"){
			$prod = "pillowcase";
			$newProduct = "Pillow Case";
		}elseif(substr($id,0,2) == "bc"){
			$prod = "balstercase";
			$newProduct = "Balster Case";
		}else{
			$prod = "duvetcover";
			$newProduct = "Duvet Cover";
		}

		$where = array('id' => $id);
		$data = array(
			'title' => 'Edit Product '. $newProduct .' ('. $id .')',
			'row' => $this->m_bedlinen->edit_product($where,'sky_prod_'. $prod .'')->row(),
		);

		$this->load->view('sky_admin/sky_layouts/sky_head', $data);
		$this->load->view('sky_admin/sky_layouts/sky_nav');
		$this->load->view('sky_admin/sky_layouts/sky_top_nav');
		$this->load->view('sky_admin/sky_products/sky_crud/edit');
		$this->load->view('sky_admin/sky_layouts/sky_footer');
		
	}

	public function update_product($id)
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

		$config['upload_path']          = './upload/bedlinen/'. $prod .'/'. $this->input->post('id') .'';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 8000;
		$config['max_width']            = 1920;
		$config['max_height']           = 1080;
 
		$this->load->library('upload', $config);
		$this->upload->overwrite = true;

		if (!is_dir('./upload/bedlinen/'. $prod .'/'. $this->input->post('id') .'')) {
			mkdir('./upload/bedlinen/'. $prod .'/'. $this->input->post('id') .'',0777,TRUE);
		}
		if ($this->upload->do_upload('product_img_1'))
		{
			$upload_data_1 =  $this->upload->data();
			$product_img_1 = $upload_data_1['file_name'];
			$img_1 = array(
				'product_img_1' => $product_img_1,
			);
			$this->m_bedlinen->update_product($where,$img_1,'sky_prod_'. $prod .'');
		}
		if ($this->upload->do_upload('product_img_2'))
		{
			$upload_data_2 =  $this->upload->data();
			$product_img_2 = $upload_data_2['file_name'];
			$img_2 = array(
				'product_img_2' => $product_img_2,
			);
			$this->m_bedlinen->update_product($where,$img_2,'sky_prod_'. $prod .'');
		}
		if ($this->upload->do_upload('product_img_3'))
		{
			$upload_data_3 =  $this->upload->data();
			$product_img_3 = $upload_data_3['file_name'];
			$img_3 = array(
				'product_img_3' => $product_img_3,
			);
			$this->m_bedlinen->update_product($where,$img_3,'sky_prod_'. $prod .'');
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
		$this->m_bedlinen->update_product($where,$data,'sky_prod_'. $prod .'');

		redirect(base_url('sky-admin/products/bedlinen'));
		
	}

	public function delete(){

		$id = $this->input->post('id');
		
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
		$hapus = $this->m_bedlinen->delete_product($where,'sky_prod_'. $prod .'');
		if($hapus){
			echo true;
		} else {
			echo false;
		}
	}
}
