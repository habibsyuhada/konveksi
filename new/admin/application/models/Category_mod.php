<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_mod extends CI_Model {

	public function __construct(){
    parent::__construct();
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

	public function category_create_process_db($data)
  {
    $this->db->insert('category', $data);
    $insert_id = $this->db->insert_id();
    return $insert_id;
  }
	
	public function category_update_process_db($data, $where)
  {
    $this->db->where($where);
    $this->db->update('category', $data);
  }
	
	public function category_delete_process_db($where)
  {
    $this->db->where($where);
    $this->db->delete('category');
  }

}