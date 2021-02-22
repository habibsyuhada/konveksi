<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_mod extends CI_Model {

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
		$query = $this->db->get('product');
		
		return $query->result_array();
	}

	public function product_create_process_db($data)
  {
    $this->db->insert('product', $data);
    $insert_id = $this->db->insert_id();
    return $insert_id;
  }
	
	public function product_update_process_db($data, $where)
  {
    $this->db->where($where);
    $this->db->update('product', $data);
  }
	
	public function product_delete_process_db($where)
  {
    $this->db->where($where);
    $this->db->delete('product');
  }

}