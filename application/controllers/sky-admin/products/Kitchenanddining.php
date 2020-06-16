<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kitchenanddining extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kitchenanddining');
		$this->load->helper(array('form', 'url'));
		if($this->session->userdata('status') != "Logged-in"){
            redirect(base_url('sky-admin'));
        }
	}
	public function index()
	{
		$data = array(
			'title' => 'Kitchen & Dining',
			'kitchenanddining' => $this->m_kitchenanddining->all_data()->result(),
		);

		$this->load->view('sky_admin/sky_layouts/sky_head', $data);
		$this->load->view('sky_admin/sky_layouts/sky_nav');
		$this->load->view('sky_admin/sky_layouts/sky_top_nav');
		$this->load->view('sky_admin/sky_products/sky_kitchenanddining/index');
		$this->load->view('sky_admin/sky_layouts/sky_footer');
	}

	public function add_product($product)
	{

		$check = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_kitchenanddining')->num_rows();
		$no = $this->db->order_by('id','desc')->limit(1)->get('sky_prod_kitchenanddining')->row();
		if($check > 0){
			$newNo = substr($no->id,3)+1;
			$id = 'kd-'. sprintf("%04s", $newNo) .'';
		}else{
			$id = 'kd-1';
		}
		

		$newProduct = 'Kitchen & Dining';

		$data = array (
			'title' => 'Create Product '. $newProduct .'',
			'id' => $id,
			'link' => '',
		);

		$this->load->view('sky_admin/sky_layouts/sky_head', $data);
		$this->load->view('sky_admin/sky_layouts/sky_nav');
		$this->load->view('sky_admin/sky_layouts/sky_top_nav');
		$this->load->view('sky_admin/sky_products/sky_crud/add');
		$this->load->view('sky_admin/sky_layouts/sky_footer');
	}

	public function add_product_post($product)
	{

		$config['upload_path']          = './upload/kitchen-and-dining/'. $this->input->post('id') .'';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 8000;
		$config['max_width']            = 1920;
		$config['max_height']           = 1080;
 
		$this->load->library('upload', $config);
		$this->upload->overwrite = true;

		if (!is_dir('./upload/kitchen-and-dining/'. $this->input->post('id') .'')) {
			mkdir('./upload/kitchen-and-dining/'. $this->input->post('id') .'',0777,TRUE);
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


		$prod = "kitchenanddining";
	
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
		$this->m_kitchenanddining->create_product($data,'sky_prod_'. $prod .'');

		redirect(base_url('sky-admin/products/kitchen-and-dining'));
		
	}

	public function edit_product($id)
	{
		
		$prod = "kitchenanddining";
		$newProduct = "Kitchen & Dining";

		$where = array('id' => $id);
		$data = array(
			'title' => 'Edit Product '. $newProduct .' ('. $id .')',
			'row' => $this->m_kitchenanddining->edit_product($where,'sky_prod_'. $prod .'')->row(),
		);

		$this->load->view('sky_admin/sky_layouts/sky_head', $data);
		$this->load->view('sky_admin/sky_layouts/sky_nav');
		$this->load->view('sky_admin/sky_layouts/sky_top_nav');
		$this->load->view('sky_admin/sky_products/sky_crud/edit');
		$this->load->view('sky_admin/sky_layouts/sky_footer');
		
	}

	public function update_product($id)
	{
		$prod = "kitchenanddining";

		$where = array('id' => $id);

		$config['upload_path']          = './upload/kitchen-and-dining/'. $this->input->post('id') .'';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 8000;
		$config['max_width']            = 1920;
		$config['max_height']           = 1080;
 
		$this->load->library('upload', $config);
		$this->upload->overwrite = true;

		if (!is_dir('./upload/kitchen-and-dining/'. $this->input->post('id') .'')) {
			mkdir('./upload/kitchen-and-dining/'. $this->input->post('id') .'',0777,TRUE);
		}
		if ($this->upload->do_upload('product_img_1'))
		{
			$upload_data_1 =  $this->upload->data();
			$product_img_1 = $upload_data_1['file_name'];
			$img_1 = array(
				'product_img_1' => $product_img_1,
			);
			$this->m_kitchenanddining->update_product($where,$img_1,'sky_prod_'. $prod .'');
		}
		if ($this->upload->do_upload('product_img_2'))
		{
			$upload_data_2 =  $this->upload->data();
			$product_img_2 = $upload_data_2['file_name'];
			$img_2 = array(
				'product_img_2' => $product_img_2,
			);
			$this->m_kitchenanddining->update_product($where,$img_2,'sky_prod_'. $prod .'');
		}
		if ($this->upload->do_upload('product_img_3'))
		{
			$upload_data_3 =  $this->upload->data();
			$product_img_3 = $upload_data_3['file_name'];
			$img_3 = array(
				'product_img_3' => $product_img_3,
			);
			$this->m_kitchenanddining->update_product($where,$img_3,'sky_prod_'. $prod .'');
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
		$this->m_kitchenanddining->update_product($where,$data,'sky_prod_'. $prod .'');

		redirect(base_url('sky-admin/products/kitchen-and-dining'));
		
	}

	public function delete(){

		$id = $this->input->post('id');

		$prod = "kitchenanddining";

		$where = array('id' => $id);
		$hapus = $this->m_kitchenanddining->delete_product($where,'sky_prod_'. $prod .'');
		if($hapus){
			echo true;
		} else {
			echo false;
		}
		
	}
}