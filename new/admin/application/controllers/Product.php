<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
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
	 * @see https://codeigniter.com/product_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		cek_login();
		$this->load->model('home_mod');
		$this->load->model('product_mod');
		$this->load->model('category_mod');
	}

	public function index(){
		redirect("product/product_list");
	}

	public function product_list(){
		$data['product_list'] 	= $this->product_mod->product_list_db();
		$datadb = $this->category_mod->category_list_db();
		$category_list = [];
		foreach ($datadb as $key => $value) {
			$category_list[$value['id']] = $value['name'];
		}
		$data['category_list'] = $category_list;

    $data['subview'] 				= 'product/product_list';
		$data['meta_title'] 		= 'Product List';
		$this->load->view('index', $data);
  }

	public function product_create(){
		$data['category_list'] 	= $this->category_mod->category_list_db();

    $data['subview'] 				= 'product/product_create';
		$data['meta_title'] 		= 'Product Create';
		$this->load->view('index', $data);
	}
	
	public function product_create_process(){
		$post = $this->input->post();

    $upload_path = 'file/image/';
		$this->load->library('upload');

		$config['upload_path']          = $upload_path;
		$config['file_name']            = 'img_thumb'.date('YmdHis');
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['overwrite'] 						= TRUE;
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('main_picture')) {
			$this->session->set_flashdata('error', $this->upload->display_errors());
			redirect("product/product_create");
			return false;
		}
    $main_picture = $this->upload->data("file_name");

    $form_data = array(
			'name' 				  		=> $post['name'],
			'main_picture' 			=> $main_picture,
			'price' 						=> $post['price'],
			'discount_price'		=> $post['discount_price'],
			'category' 					=> ";".join(";", $post['category']).";",
			'description' 			=> $post['description'],
			'full_description' 	=> $post['full_description'],
		);
		$id_product = $this->product_mod->product_create_process_db($form_data);

		$this->session->set_flashdata('success', 'Your Product data has been Created!');
		redirect('product/product_create');
	}
	
	public function product_update($id){
		$where['id'] 					= $id;
		$product_list 					= $this->product_mod->product_list_db($where);
		if(count($product_list) < 1){
			// $this->session->set_flashdata('error', 'Product Not Found!');
			redirect("product/product_list");
		}
		$data['product'] 	= $product_list[0];

		$data['category_list'] 	= $this->category_mod->category_list_db();

    $data['subview'] 				= 'product/product_update';
		$data['meta_title'] 		= 'Product Update';
		$this->load->view('index', $data);
	}
	
	public function product_update_process(){
		$post = $this->input->post();

    $form_data = array(
			'name' 				  		=> $post['name'],
			'price' 						=> $post['price'],
			'discount_price'		=> $post['discount_price'],
			'category' 					=> ";".join(";", $post['category']).";",
			'description' 			=> $post['description'],
			'full_description' 	=> $post['full_description'],
		);
		$where['id'] = $post['id'];
		$this->product_mod->product_update_process_db($form_data, $where);

		$this->session->set_flashdata('success', 'Your Product data has been Updated!');
		redirect('product/product_update/'.$post['id']);
	}

	public function product_delete_process($link){
		$where['link'] = $link;
		$this->product_mod->product_delete_process_db($where);

		$this->session->set_flashdata('success', 'Your Product data has been Deleted!');
		redirect('product/product_list');
	}
		
}