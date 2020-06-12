<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bedding extends CI_Model {

    public function innerduvet()
    {
        $this->db->select("*");
        $this->db->from("sky_prod_innerduvet");
        if($this->uri->segment(1) == "products"){
            $this->db->where('status',"yes");
        }
        $query = $this->db->get();
        return $query;
    }
    
    public function mattressprotector()
    {
        $this->db->select("*");
        $this->db->from("sky_prod_mattressprotector");
        if($this->uri->segment(1) == "products"){
            $this->db->where('status',"yes");
        }
        $query = $this->db->get();
        return $query;
    }

    public function pillow()
    {
        $this->db->select("*");
        $this->db->from("sky_prod_pillow");
        if($this->uri->segment(1) == "products"){
            $this->db->where('status',"yes");
        }
        $query = $this->db->get();
        return $query;
    }
   
    public function balster()
    {
        $this->db->select("*");
        $this->db->from("sky_prod_balster");
        if($this->uri->segment(1) == "products"){
            $this->db->where('status',"yes");
        }
        $query = $this->db->get();
        return $query;
    }
    
    public function cushion()
    {
        $this->db->select("*");
        $this->db->from("sky_prod_cushion");
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