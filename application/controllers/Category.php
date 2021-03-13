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
    $post['link'] = strtolower($post['link']);

    $upload_path = 'file/image/';
		$this->load->library('upload');

		$config['upload_path']          = $upload_path;
		$config['file_name']            = 'img_'.$post['link'].'_thumb'.date('YmdHis');
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['overwrite'] 						= TRUE;
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('picture_thumb')) {
			$this->session->set_flashdata('error', $this->upload->display_errors());
			redirect("category/category_create");
			return false;
		}
    $picture_thumb = $this->upload->data("file_name");

		$config['upload_path']          = $upload_path;
		$config['file_name']            = 'img_'.$post['link'].'_main'.date('YmdHis');
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['overwrite'] 						= TRUE;
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('picture_main')) {
			$this->session->set_flashdata('error', $this->upload->display_errors());
			redirect("category/category_create");
			return false;
		}
    $picture_main = $this->upload->data("file_name");

    $form_data = array(
			'link' 				  => $post['link'],
			'name' 				  => $post['name'],
			'picture_thumb' => $picture_thumb,
			'picture_main' 	=> $picture_main,
			'price' 				=> $post['price'],
			'category' 			=> $post['category'],
			'description' 	=> $post['description'],
		);
		$id_category = $this->category_mod->category_create_process_db($form_data);

		$this->session->set_flashdata('success', 'Your Category data has been Created!');
		redirect('category/category_create');
	}
	
	public function category_update($link){
		$where['link'] 					= $link;
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
	
	public function category_update_process($link){
		$post = $this->input->post();
    $post['link'] = strtolower($post['link']);

    $upload_path = 'file/image/';
		$this->load->library('upload');

		$config['upload_path']          = $upload_path;
		$config['file_name']            = 'img_'.$post['link'].'_thumb';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['overwrite'] 						= TRUE;
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('picture_thumb')) {
			$this->session->set_flashdata('error', $this->upload->display_errors());
			redirect("category/category_update/".$link);
			return false;
		}
    $picture_thumb = $this->upload->data("file_name");

		$config['upload_path']          = $upload_path;
		$config['file_name']            = 'img_'.$post['link'].'_main';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['overwrite'] 						= TRUE;
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('picture_main')) {
			$this->session->set_flashdata('error', $this->upload->display_errors());
			redirect("category/category_update/".$link);
			return false;
		}
    $picture_main = $this->upload->data("file_name");

    $form_data = array(
			'link' 				  => $post['link'],
			'name' 				  => $post['name'],
			'picture_thumb' => $picture_thumb,
			'picture_main' 	=> $picture_main,
			'price' 				=> $post['price'],
			'category' 			=> $post['category'],
			'description' 	=> $post['description'],
		);
		$where['link'] = $link;
		$id_category = $this->category_mod->category_update_process_db($form_data, $where);

		$this->session->set_flashdata('success', 'Your Category data has been Updated!');
		redirect('category/category_update/'.$post['link']);
	}

	public function category_delete_process($link){
		$where['link'] = $link;
		$this->category_mod->category_delete_process_db($where);

		$this->session->set_flashdata('success', 'Your Category data has been Deleted!');
		redirect('category/category_list');
	}
		
}
