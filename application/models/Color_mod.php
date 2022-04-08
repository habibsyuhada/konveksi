<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Color_mod extends CI_Model {

	public function __construct(){
    parent::__construct();
  }
   
  function color_list_db($where = null){
		if(isset($where)){
      if(count($where) > 0){
        $this->db->where($where);
      }
		}
		$this->db->order_by("created_date", "DESC");
		$query = $this->db->get('color');
		
		return $query->result_array();
	}

	public function color_create_process_db($data)
  {
    $this->db->insert('color', $data);
    $insert_id = $this->db->insert_id();
    return $insert_id;
  }
	
	public function color_update_process_db($data, $where)
  {
    $this->db->where($where);
    $this->db->update('color', $data);
  }
	
	public function color_delete_process_db($where)
  {
    $this->db->where($where);
    $this->db->delete('color');
  }

}