<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

    public function __construct()
	{
        parent::__construct();
        $this->load->model('m_settings');
		$this->load->helper('url');
		if($this->session->userdata('status') != "Logged-in"){
            redirect(base_url('sky-admin'));
        }
    }
    
    public function index()
    {

        $data = array(
            'title' => 'Settings',
            'user' => $this->m_settings->data_user()->result(),
            'loginlog' => $this->m_settings->data_login_log()->result(),
        );
        
        $this->load->view('sky_admin/sky_layouts/sky_head',$data);
		$this->load->view('sky_admin/sky_layouts/sky_nav');
		$this->load->view('sky_admin/sky_layouts/sky_top_nav');
		$this->load->view('sky_admin/sky_settings/index');
		$this->load->view('sky_admin/sky_layouts/sky_footer');

    }

    public function master_admin()
    {

        $data = array (
			'title' => 'Create Admin',
		);

		$this->load->view('sky_admin/sky_layouts/sky_head', $data);
		$this->load->view('sky_admin/sky_layouts/sky_nav');
		$this->load->view('sky_admin/sky_layouts/sky_top_nav');
		$this->load->view('sky_admin/sky_settings/add_admin');
		$this->load->view('sky_admin/sky_layouts/sky_footer');
        
    }

    public function add_admin()
    {

        $name = $this->input->post('name');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $status = "0";
        $hak = "Y";

        $data = array(
            'name' => $name,
            'username' => $username,
            'password' => $password,
            'status' => $status,
            'hak' => $hak,
        );

        $insert = $this->m_settings->create($data, "sky_user");

        $this->session->set_flashdata('message', '    <script>
                                                                        swal("Your new account has been added", {
                                                                            icon: "success",
                                                                            title: "Submitted",
                                                                            button: {
                                                                            text: "Ok, Thanks :)",
                                                                            value: true,
                                                                            visible: true,
                                                                            className: "",
                                                                            closeModal: true
                                                                            }
                                                                        });
                                                                    </script>');

        redirect(base_url('sky-admin/settings'));
        
    }

    public function edit_admin($id){

        $where = array(
            'id' => $id,
        );

        $data = array (
            'title' => 'Edit Admin',
            'row' => $this->m_settings->edit($where,'sky_user')->row(),
		);

		$this->load->view('sky_admin/sky_layouts/sky_head', $data);
		$this->load->view('sky_admin/sky_layouts/sky_nav');
		$this->load->view('sky_admin/sky_layouts/sky_top_nav');
		$this->load->view('sky_admin/sky_settings/edit_admin');
		$this->load->view('sky_admin/sky_layouts/sky_footer');

    }

    public function update_admin(){

        $where = array(
            'id' => $this->input->post('id'),
        );

        $name = $this->input->post('name');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $hak = $this->input->post('hak');

        if($this->input->post('password')){
            $data = array(
                'name' => $name,
                'username' => $username,
                'password' => $password,
                'hak' => $hak,
            );
        }else{
            $data = array(
                'name' => $name,
                'username' => $username,
                'hak' => $hak,
            );
        }

        $update = $this->m_settings->update($where,$data,'sky_user');

        $this->session->set_flashdata('message', '    <script>
                                                                        swal("Your account has been updated :)", {
                                                                            icon: "success",
                                                                            title: "Updated",
                                                                            button: {
                                                                            text: "Ok, Thanks :)",
                                                                            value: true,
                                                                            visible: true,
                                                                            className: "",
                                                                            closeModal: true
                                                                            }
                                                                        });
                                                                    </script>');

		redirect(base_url('sky-admin/settings'));

    }

    public function delete_admin(){

		$id = $this->input->post('id');

        $where = array('id' => $id);
        
		$delete = $this->m_settings->delete($where,'sky_user');
		if($delete){
			echo true;
		} else {
			echo false;
		}
	}
}