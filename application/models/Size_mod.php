<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Size_mod extends CI_Model {

	public function __construct(){
    parent::__construct();
  }
   
  function size_list_db($where = null){
		if(isset($where)){
      if(count($where) > 0){
        $this->db->where($where);
      }
		}
		$this->db->order_by("created_date", "ASC");
		$query = $this->db->get('size');
		
		return $query->result_array();
	}

	public function size_create_process_db($data)
  {
    $this->db->insert('size', $data);
    $insert_id = $this->db->insert_id();
    return $insert_id;
  }
	
	public function size_update_process_db($data, $where)
  {
    $this->db->where($where);
    $this->db->update('size', $data);
  }
	
	public function size_delete_process_db($where)
  {
    $this->db->where($where);
    $this->db->delete('size');
  }

}