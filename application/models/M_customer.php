<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_customer extends CI_Model {

    public function check($where,$table){		
        return $this->db->get_where($table,$where);
    }

    public function create($data,$table)
    {
		$this->db->insert($table,$data);
    }

    public function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

    public function delete($where,$table)
    {
		$this->db->where($where);
    	$this->db->delete($table);
        return $this->db->query();
    }
}