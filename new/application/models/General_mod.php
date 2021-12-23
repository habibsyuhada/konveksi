<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General_mod extends CI_Model {

	public function __construct(){
    parent::__construct();
  }
   
  function product_list_db($where = null){
		if(isset($where)){
      if(count($where) > 0){
        $this->db->where($where);
      }
		}
		$this->db->order_by("created_date", "DESC");
		$query = $this->db->get('product_shop');
		
		return $query->result_array();
	}

	function category_list_db($where = null){
		if(isset($where)){
      if(count($where) > 0){
        $this->db->where($where);
      }
		}
		$this->db->order_by("name", "DESC");
		$query = $this->db->get('category');
		
		return $query->result_array();
	}

}