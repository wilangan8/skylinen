<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bedlinen extends CI_Model {

    public function sheeting()
    {
        $this->db->select("*");
        $this->db->from("sky_prod_sheeting");
        if($this->input->get('search_query')){
            $this->db->like('name',$this->input->get('search_query'));
        }
        if($this->uri->segment(1) == "products"){
            $this->db->where('status',"yes");
        }
        $query = $this->db->get();
        return $query;
    }

    public function flatsheet()
    {
        $this->db->select("*");
        $this->db->from("sky_prod_flatsheet");
        if($this->input->get('search_query')){
            $this->db->like('name',$this->input->get('search_query'));
        }
        if($this->uri->segment(1) == "products"){
            $this->db->where('status',"yes");
        }
        $query = $this->db->get();
        return $query;
    }

    public function fittedsheet()
    {
        $this->db->select("*");
        $this->db->from("sky_prod_fittedsheet");
        if($this->input->get('search_query')){
            $this->db->like('name',$this->input->get('search_query'));
        }
        if($this->uri->segment(1) == "products"){
            $this->db->where('status',"yes");
        }
        $query = $this->db->get();
        return $query;
    }

    public function pillowcase()
    {
        $this->db->select("*");
        $this->db->from("sky_prod_pillowcase");
        if($this->input->get('search_query')){
            $this->db->like('name',$this->input->get('search_query'));
        }
        if($this->uri->segment(1) == "products"){
            $this->db->where('status',"yes");
        }
        $query = $this->db->get();
        return $query;
    }

    public function balstercase()
    {
        $this->db->select("*");
        $this->db->from("sky_prod_balstercase");
        if($this->input->get('search_query')){
            $this->db->like('name',$this->input->get('search_query'));
        }
        if($this->uri->segment(1) == "products"){
            $this->db->where('status',"yes");
        }
        $query = $this->db->get();
        return $query;
    }
    
    public function duvetcover()
    {
        $this->db->select("*");
        $this->db->from("sky_prod_duvetcover");
        if($this->input->get('search_query')){
            $this->db->like('name',$this->input->get('search_query'));
        }
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