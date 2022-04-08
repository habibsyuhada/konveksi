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
		$this->load->model('color_mod');
		$this->load->model('size_mod');
	}

	public function index(){
		redirect("product/product_list");
	}

	public function product_list(){
		$data['product_list'] 	= $this->product_mod->product_list_db();

    $data['subview'] 				= 'product/product_list';
		$data['meta_title'] 		= 'Product List';
		$this->load->view('index', $data);
  }

	public function product_create(){
		$data['category_list'] 	= $this->category_mod->category_list_db(['status' => 1]);

    $data['subview'] 				= 'product/product_create';
		$data['meta_title'] 		= 'Product Create';
		$this->load->view('index', $data);
	}
	
	public function product_create_process(){
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
			redirect("product/product_create");
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
			redirect("product/product_create");
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
		$id_product = $this->product_mod->product_create_process_db($form_data);

		$this->session->set_flashdata('success', 'Your Product data has been Created!');
		redirect('product/product_create');
	}
	
	public function product_update($link){
		$where['link'] 					= $link;
		$product_list 					= $this->product_mod->product_list_db($where);
		if(count($product_list) < 1){
			// $this->session->set_flashdata('error', 'Product Not Found!');
			redirect("product/product_list");
		}
		$data['product_list'] 	= $product_list[0];
		
		$data['category_list'] 	= $this->category_mod->category_list_db(['status' => 1]);
		$data['color_list'] 		= $this->color_mod->color_list_db(['id_product' => $product_list[0]['id']]);
		$data['size_list'] 			= $this->size_mod->size_list_db(['id_product' => $product_list[0]['id']]);

    $data['subview'] 				= 'product/product_update';
		$data['meta_title'] 		= 'Product Update';
		$this->load->view('index', $data);
	}
	
	public function product_update_process($link){
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
			redirect("product/product_update/".$link);
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
			redirect("product/product_update/".$link);
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
		$id_product = $this->product_mod->product_update_process_db($form_data, $where);

		$this->session->set_flashdata('success', 'Your Product data has been Updated!');
		redirect('product/product_update/'.$post['link']);
	}

	public function product_delete_process($link){
		$where['link'] = $link;
		$this->product_mod->product_delete_process_db($where);

		$this->session->set_flashdata('success', 'Your Product data has been Deleted!');
		redirect('product/product_list');
	}

	public function color_create_process(){
		$post = $this->input->post();

    $upload_path = 'file/image/color';
		$this->load->library('upload');

		$config['upload_path']          = $upload_path;
		$config['file_name']            = date('YmdHis');
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['overwrite'] 						= TRUE;
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('image_color')) {
			$this->session->set_flashdata('error', $this->upload->display_errors());
			redirect('product/product_update/'.$post['link']);
			return false;
		}
    $image_color = $this->upload->data("file_name");

    $form_data = array(
			'id_product' 		=> $post['id_product'],
			'color' 				=> strtoupper($post['color']),
			'image' 				=> $image_color,
		);
		$id_product = $this->color_mod->color_create_process_db($form_data);

		$this->session->set_flashdata('success', 'Your Product Color data has been Created!');
		redirect('product/product_update/'.$post['link']);
	}

	public function color_delete_process($id, $link){
		$where['id'] = $id;
		$this->color_mod->color_delete_process_db($where);

		$this->session->set_flashdata('success', 'Your Product Color data has been Deleted!');
		redirect('product/product_update/'.$link);
	}

	public function size_create_process(){
		$post = $this->input->post();

		foreach ($post["size"] as $key => $value) {
			if($post["id"][$key] == 0){
				$form_data = array(
					'id_product' 	=> $post['id_product'],
					'size' 				=> $post['size'][$key],
					's_size' 			=> $post['s_size'][$key],
					'm_size' 			=> $post['m_size'][$key],
					'l_size' 			=> $post['l_size'][$key],
					'xl_size' 		=> $post['xl_size'][$key],
				);
				$this->size_mod->size_create_process_db($form_data);
			}
			else{
				$form_data = array(
					'size' 				=> $post['size'][$key],
					's_size' 			=> $post['s_size'][$key],
					'm_size' 			=> $post['m_size'][$key],
					'l_size' 			=> $post['l_size'][$key],
					'xl_size' 		=> $post['xl_size'][$key],
				);
				$this->size_mod->size_update_process_db($form_data, ["id" => $post["id"][$key]]);
			}
		}

		$this->session->set_flashdata('success', 'Your Product Size data has been Updated!');
		redirect('product/product_update/'.$post['link']);
	}

	public function size_delete_process($id, $link){
		$where['id'] = $id;
		$this->size_mod->size_delete_process_db($where);

		$this->session->set_flashdata('success', 'Your Product Size data has been Deleted!');
		redirect('product/product_update/'.$link);
	}
		
}
