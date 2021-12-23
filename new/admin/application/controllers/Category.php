<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/category_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		cek_login();
		$this->load->model('home_mod');
		$this->load->model('category_mod');
	}

	public function index(){
		redirect("category/category_list");
	}

	public function category_list(){
		$data['category_list'] 	= $this->category_mod->category_list_db();

    $data['subview'] 				= 'category/category_list';
		$data['meta_title'] 		= 'Category List';
		$this->load->view('index', $data);
  }

	public function category_create(){
    $data['subview'] 				= 'category/category_create';
		$data['meta_title'] 		= 'Category Create';
		$this->load->view('index', $data);
	}
	
	public function category_create_process(){
		$post = $this->input->post();

    $form_data = array(
			'name' 				  => $post['name'],
			'status_delete' => $post['status_delete'],
		);
		$id_category = $this->category_mod->category_create_process_db($form_data);

		$this->session->set_flashdata('success', 'Your Category data has been Created!');
		redirect('category/category_list');
	}
	
	public function category_update($id){
		$where['id'] 					= $id;
		$category_list 					= $this->category_mod->category_list_db($where);
		if(count($category_list) < 1){
			// $this->session->set_flashdata('error', 'Category Not Found!');
			redirect("category/category_list");
		}
		$data['category_list'] 	= $category_list[0];

    $data['subview'] 				= 'category/category_update';
		$data['meta_title'] 		= 'Category Update';
		$this->load->view('index', $data);
	}
	
	public function category_update_process(){
		$post = $this->input->post();

    $form_data = array(
			'name' 				 	 => $post['name'],
			'status_delete'  => $post['status_delete'],
		);
		$where['id'] = $post['id'];
		$id_category = $this->category_mod->category_update_process_db($form_data, $where);

		$this->session->set_flashdata('success', 'Your Category data has been Updated!');
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function category_delete_process($link){
		$where['link'] = $link;
		$this->category_mod->category_delete_process_db($where);

		$this->session->set_flashdata('success', 'Your Category data has been Deleted!');
		redirect('category/category_list');
	}
		
}
