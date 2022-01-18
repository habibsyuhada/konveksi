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

	public function product_list_serverside_db($cat, $page, $where = NULL){
		$table = 'product_shop';
		$length = 9;
		$start = ($page - 1) * $length;

		$this->db->from($table);
		if(isset($where)){
			$this->db->where($where);
		}

		if($cat == 'count_all'){
			return $this->db->count_all_results();
		}
		
		$this->db->order_by('id', 'DESC');

		if($cat == 'data'){
			if ($length != -1)
			$this->db->limit($length, $start);

			$query = $this->db->get();
			return $query->result_array();
		}
		elseif($cat == 'count_filter'){
			$query = $this->db->get();
			return $query->num_rows();
		}
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

	function product_color_list_db($where = null){
		if(isset($where)){
      if(count($where) > 0){
        $this->db->where($where);
      }
		}
		$this->db->order_by("created_date", "ASC");
		$query = $this->db->get('product_color');
		
		return $query->result_array();
	}

	function product_picture_list_db($where = null){
		if(isset($where)){
      if(count($where) > 0){
        $this->db->where($where);
      }
		}
		$this->db->order_by("created_date", "ASC");
		$query = $this->db->get('product_picture');
		
		return $query->result_array();
	}

}