<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function check($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function update_status($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

}