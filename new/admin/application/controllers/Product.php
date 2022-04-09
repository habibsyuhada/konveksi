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

		$datadb = $this->product_mod->product_picture_list_db();
		$picture_list = [];
		foreach ($datadb as $key => $value) {
			if(!isset($picture_list[$value['id_product']])){
				$picture_list[$value['id_product']] = $value;
			}
		}
		$data['picture_list'] = $picture_list;

		$datadb = $this->product_mod->product_color_list_db();
		$color_list = [];
		foreach ($datadb as $key => $value) {
			if(!isset($color_list[$value['id_product']])){
				$color_list[$value['id_product']] = $value;
			}
		}
		$data['color_list'] = $color_list;

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

		// $config['upload_path']          = $upload_path;
		// $config['file_name']            = 'img_thumb'.date('YmdHis');
		// $config['allowed_types']        = 'gif|jpg|png|jpeg';
		// $config['overwrite'] 						= TRUE;
		// $this->upload->initialize($config);
		// if (!$this->upload->do_upload('main_picture')) {
		// 	$this->session->set_flashdata('error', $this->upload->display_errors());
		// 	redirect("product/product_create");
		// 	return false;
		// }
    // $main_picture = $this->upload->data("file_name");

    $form_data = array(
			'name' 				  		=> $post['name'],
			'main_picture' 			=> '',
			'price' 						=> $post['price'],
			'discount_price'		=> $post['discount_price'],
			'promotion' 				=> $post['promotion'],
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

		$data['product_color_list'] = $this->product_mod->product_color_list_db(['id_product' => $id]);
		$data['product_picture_list'] = $this->product_mod->product_picture_list_db(['id_product' => $id]);

		$data['category_list'] 	= $this->category_mod->category_list_db();

    $data['subview'] 				= 'product/product_update';
		$data['meta_title'] 		= 'Product Update';
		$this->load->view('index', $data);
	}
	
	public function product_update_process(){
		$post = $this->input->post();

		$main_picture = '';
		if($_FILES['main_picture']['name'] != '') {
			$upload_path = 'file/image/';
			$this->load->library('upload');
	
			$config['upload_path']          = $upload_path;
			$config['file_name']            = 'img_thumb'.date('YmdHis');
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['overwrite'] 						= TRUE;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('main_picture')) {
				$this->session->set_flashdata('error', $this->upload->display_errors());
				redirect($_SERVER['HTTP_REFERER']);
				return false;
			}
			$main_picture = $this->upload->data("file_name");
		}

    $form_data = array(
			'name' 				  		=> $post['name'],
			'price' 						=> $post['price'],
			'discount_price'		=> $post['discount_price'],
			'category' 					=> ";".join(";", $post['category']).";",
			'promotion' 				=> $post['promotion'],
			'description' 			=> $post['description'],
			'full_description' 	=> $post['full_description'],
		);
		if($main_picture != ''){
			$form_data['main_picture'] = $main_picture;
		}
		$where['id'] = $post['id'];
		$this->product_mod->product_update_process_db($form_data, $where);

		$this->session->set_flashdata('success', 'Your Product data has been Updated!');
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function product_delete_process($link){
		$where['link'] = $link;
		$this->product_mod->product_delete_process_db($where);

		$this->session->set_flashdata('success', 'Your Product data has been Deleted!');
		redirect('product/product_list');
	}

	public function product_color_new_process(){
		$post = $this->input->post();
		$form_data = array(
			'id_product' => $post['id_product'],
			'color_code' => $post['color_code'],
		);
		$id = $this->product_mod->product_color_create_process_db($form_data);

		$datadb = $this->product_mod->product_color_list_db(['id_product' => $post['id_product']]);
		$color = '#ffffff';
		if(count($datadb) > 0){
			$color = $datadb[0]['color_code'];
		}
		$form_data = array(
			'color_code' 				  		=> $color,
		);
		$where['id'] = $post['id_product'];
		$this->product_mod->product_update_process_db($form_data, $where);

		$this->session->set_flashdata('success', 'Your Product data has been Created!');
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function product_color_delete_process($id){
		$this->product_mod->product_color_delete_process_db(['id' => $id]);

		$this->session->set_flashdata('success', 'Your Product data has been Deleted!');
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function product_color_main_update_process($id, $id_product){
		$this->product_mod->product_color_update_process_db([
			"ismain" => 0
		], [
			'id_product' => $id_product
		]);

		$this->product_mod->product_color_update_process_db([
			"ismain" => 1
		], [
			'id' => $id
		]);

		$this->session->set_flashdata('success', 'Your Product Color data has been Updated!');
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function product_picture_new_process(){
		$post = $this->input->post();

    $upload_path = 'file/image/';
		$this->load->library('upload');

		$config['upload_path']          = $upload_path;
		$config['file_name']            = 'img_detail_thumb'.date('YmdHis');
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
			'picture' 			=> $main_picture,
			'id_product' 				=> $post['id_product'],
			'svg' 							=> $post['svg'],
		);
		$id_product = $this->product_mod->product_picture_create_process_db($form_data);

		$this->session->set_flashdata('success', 'Your Product data has been Created!');
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function product_picture_delete_process($id){
		$this->product_mod->product_picture_delete_process_db(['id' => $id]);

		$this->session->set_flashdata('success', 'Your Product data has been Deleted!');
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function product_picture_main_update_process($id, $id_product){
		$this->product_mod->product_picture_update_process_db([
			"ismain" => 0
		], [
			'id_product' => $id_product
		]);

		$this->product_mod->product_picture_update_process_db([
			"ismain" => 1
		], [
			'id' => $id
		]);

		$this->session->set_flashdata('success', 'Your Product Picture data has been Updated!');
		redirect($_SERVER['HTTP_REFERER']);
	}
		
}
