<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bathroom extends CI_Model {

    public function bathtowel()
    {
        $this->db->select("*");
        $this->db->from("sky_prod_bathtowel");
        if($this->uri->segment(1) == "products"){
            $this->db->where('status',"yes");
        }
        $query = $this->db->get();
        return $query;
    }
    
    public function handtowel()
    {
        $this->db->select("*");
        $this->db->from("sky_prod_handtowel");
        if($this->uri->segment(1) == "products"){
            $this->db->where('status',"yes");
        }
        $query = $this->db->get();
        return $query;
    }

    public function facetowel()
    {
        $this->db->select("*");
        $this->db->from("sky_prod_facetowel");
        if($this->uri->segment(1) == "products"){
            $this->db->where('status',"yes");
        }
        $query = $this->db->get();
        return $query;
    }
    
    public function bathmat()
    {
        $this->db->select("*");
        $this->db->from("sky_prod_bathmat");
        if($this->uri->segment(1) == "products"){
            $this->db->where('status',"yes");
        }
        $query = $this->db->get();
        return $query;
    }

    public function create_product($data,$table)
    {
		$this->db->insert($table,$data);
    }
    
    public function edit_product($where,$table){		
        return $this->db->get_where($table,$where);
    }

    public function update_product($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    public function delete_product($where,$table)
    {
		$this->db->where($where);
    	$this->db->delete($table);
        return $this->db->query();
    }

    public function detail_product($where,$table){		
        return $this->db->get_where($table,$where);
    }
}