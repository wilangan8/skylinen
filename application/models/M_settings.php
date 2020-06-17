<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_settings extends CI_Model {

    public function data_user()
    {
      $query = $this->db->get("sky_user");
      return $query;
    }

    public function data_login_log()
    {
      $query = $this->db->get("sky_login_log");
      return $query;
    }

    public function create($data,$table)
    {
		  $this->db->insert($table,$data);
    }

    public function edit($where,$table){		
      return $this->db->get_where($table,$where);
    }

    public function update($where,$data,$table)
    {
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