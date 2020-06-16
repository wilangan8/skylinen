<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bedding extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_bedding');
		$this->load->helper(array('form', 'url'));
		if($this->session->userdata('status') != "Logged-in"){
            redirect(base_url('sky-admin'));
        }
	}
	public function index()
	{
		$data = array (
			'title' => 'Bedding',
			'innerduvet' => $this->m_bedding->innerduvet()->result(),
			'mattressprotector' => $this->m_bedding->mattressprotector()->result(),
			'pillow' => $this->m_bedding->pillow()->result(),
			'balster' => $this->m_bedding->balster()->result(),
			'cushion' => $this->m_bedding->cushion()->result(),
		);

		$this->load->view('sky_admin/sky_layouts/sky_head', $data);
		$this->load->view('sky_admin/sky_layouts/sky_nav');
		$this->load->view('sky_admin/sky_layouts/sky_top_nav');
		$this->load->view('sky_admin/sky_products/sky_bedding/index');
		$this->load->view('sky_admin/sky_layouts/sky_footer');
	}

	public function add_product($product)
	{

		if($product == "innerduvet"){
			$check = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_innerduvet')->num_rows();
			$no = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_innerduvet')->row();
			if($check > 0){
				$newNo = substr($no->id,3)+1;
				$id = 'id-'. $newNo .'';
			}else{
				$id = 'id-1';
			}

			$newProduct = 'Inner Duvet';
		}elseif($product == "mattressprotector"){
			$check = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_mattressprotector')->num_rows();
			$no = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_mattressprotector')->row();
			if($check > 0){
				$newNo = substr($no->id,3)+1;
				$id = 'mp-'. $newNo .'';
			}else{
				$id = 'mp-1';
			}

			$newProduct = 'Mattress Protector';
		}elseif($product == "pillow"){
			$check = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_pillow')->num_rows();
			$no = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_pillow')->row();
			if($check > 0){
				$newNo = 	substr($no->id,3)+1;
				$id = 'pl-'. $newNo .'';
			}else{
				$id = 'pl-1';
			}

			$newProduct = 'Pillow';
		}elseif($product == "balster"){
			$check = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_balster')->num_rows();
			$no = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_balster')->row();
			if($check > 0){
				$newNo = substr($no->id,3)+1;
				$id = 'bs-'. $newNo .'';
			}else{
				$id = 'bs-1';
			}

			$newProduct = 'Balster';
		}else{
			$check = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_cushion')->num_rows();
			$no = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_cushion')->row();
			if($check > 0){
				$newNo = substr($no->id,3)+1;
				$id = 'ch-'. $newNo .'';
			}else{
				$id = 'ch-1';
			}		

			$newProduct = 'Cushion';
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

		$config['upload_path']          = './upload/bedding/'. $product .'/'. $this->input->post('id') .'';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 8000;
		$config['max_width']            = 1920;
		$config['max_height']           = 1080;
 
		$this->load->library('upload', $config);
		$this->upload->overwrite = true;

		if (!is_dir('./upload/bedding/'. $product .'/'. $this->input->post('id') .'')) {
			mkdir('./upload/bedding/'. $product .'/'. $this->input->post('id') .'',0777,TRUE);
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
		$this->m_bedding->create_product($data,'sky_prod_'. $prod .'');

		redirect(base_url('sky-admin/products/bedding'));
		
	}

	public function edit_product($id)
	{

		if(substr($id,0,2) == "id"){
			$prod = "innerduvet";
			$newProduct = "Inner Duvet";
		}elseif(substr($id,0,2) == "mp"){
			$prod = "mattressprotector";
			$newProduct = "Mattress Protector";
		}elseif(substr($id,0,2) == "pl"){
			$prod = "pillow";
			$newProduct = "Pillow";
		}elseif(substr($id,0,2) == "bs"){
			$prod = "balster";
			$newProduct = "Balster";
		}else{
			$prod = "cushion";
			$newProduct = "Cushion";
		}

		$where = array('id' => $id);
		$data = array(
			'title' => 'Edit Product '. $newProduct .' ('. $id .')',
			'row' => $this->m_bedding->edit_product($where,'sky_prod_'. $prod .'')->row(),
		);

		$this->load->view('sky_admin/sky_layouts/sky_head', $data);
		$this->load->view('sky_admin/sky_layouts/sky_nav');
		$this->load->view('sky_admin/sky_layouts/sky_top_nav');
		$this->load->view('sky_admin/sky_products/sky_crud/edit');
		$this->load->view('sky_admin/sky_layouts/sky_footer');
		
	}

	public function update_product($id)
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

		$config['upload_path']          = './upload/bedding/'. $prod .'/'. $this->input->post('id') .'';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 8000;
		$config['max_width']            = 1920;
		$config['max_height']           = 1080;
 
		$this->load->library('upload', $config);
		$this->upload->overwrite = true;

		if (!is_dir('./upload/bedding/'. $prod .'/'. $this->input->post('id') .'')) {
			mkdir('./upload/bedding/'. $prod .'/'. $this->input->post('id') .'',0777,TRUE);
		}
		if ($this->upload->do_upload('product_img_1'))
		{
			$upload_data_1 =  $this->upload->data();
			$product_img_1 = $upload_data_1['file_name'];
			$img_1 = array(
				'product_img_1' => $product_img_1,
			);
			$this->m_bedding->update_product($where,$img_1,'sky_prod_'. $prod .'');
		}
		if ($this->upload->do_upload('product_img_2'))
		{
			$upload_data_2 =  $this->upload->data();
			$product_img_2 = $upload_data_2['file_name'];
			$img_2 = array(
				'product_img_2' => $product_img_2,
			);
			$this->m_bedding->update_product($where,$img_2,'sky_prod_'. $prod .'');
		}
		if ($this->upload->do_upload('product_img_3'))
		{
			$upload_data_3 =  $this->upload->data();
			$product_img_3 = $upload_data_3['file_name'];
			$img_3 = array(
				'product_img_3' => $product_img_3,
			);
			$this->m_bedding->update_product($where,$img_3,'sky_prod_'. $prod .'');
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
		$this->m_bedding->update_product($where,$data,'sky_prod_'. $prod .'');

		redirect(base_url('sky-admin/products/bedding'));
		
	}

	public function delete(){

		$id = $this->input->post('id');
		
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
		$hapus = $this->m_bedding->delete_product($where,'sky_prod_'. $prod .'');
		if($hapus){
			echo true;
		} else {
			echo false;
		}
	}
}
