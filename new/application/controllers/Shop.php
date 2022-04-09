<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('general_mod');
	}

	public function index(){
		redirect('shop/list');
	}

	public function list(){
		$get = $this->input->get();
		if(@$get['page'] == ""){
			$get['page'] = 1;
		}
		if(@$get['category'] == ""){
			$get['category'] = '';
		}
		$data['page'] = $get['page'];
		$category = explode("; ", $get['category']);
		if(count($category) == 1 && $category[0] == ''){
			$category = [];
		}
		$data['category'] = $category;

		$data['category_list'] = $this->general_mod->category_list_db();
		$category_list = [];
		foreach ($data['category_list'] as $key => $value) {
			$category_list[$value['name']] = $value['id'];
		}

		$where = null;
		if(count($category) > 0){
			$where_str = "";
			foreach ($category as $key => $value) {
				if($key > 0){
					$where_str .= " AND ";
				}
				$where_str .= "category LIKE '%;".$category_list[$value].";%'";
			}
			$where[$where_str] = NULL;
		}

		$data['product_list'] = $this->general_mod->product_list_serverside_db('data', $get['page'], $where);
		$data['product_count_all_list'] = $this->general_mod->product_list_serverside_db('count_all', $get['page'], $where);
		
		$datadb = $this->general_mod->product_picture_list_db();
		$picture_list = [];
		foreach ($datadb as $key => $value) {
			if(!isset($picture_list[$value['id_product']])){
				$picture_list[$value['id_product']] = $value;
			}
		}
		$data['picture_list'] = $picture_list;

		$datadb = $this->general_mod->product_color_list_db();
		$color_list = [];
		foreach ($datadb as $key => $value) {
			if(!isset($color_list[$value['id_product']]) || $value['ismain'] == 1){
				$color_list[$value['id_product']] = $value;
			}
		}
		$data['color_list'] = $color_list;

		$data['subview'] 			= 'shop/list';
		$data['meta_title'] 	= 'Shop';
		$this->load->view('index', $data);
	}

	public function detail($code){
		$code = (int)$code;

		$datadb = $this->general_mod->product_list_db(['id' => $code]);
		$product = $datadb[0];

		$datadb = $this->general_mod->product_list_db(['id !=' => $code]);
		$suggest_product = [];
		foreach ($datadb as $key => $value) {
			if(count($suggest_product) < 4){
				$suggest_product[] = $value;
			}
		}

		$data['product_color_list'] = $this->general_mod->product_color_list_db(['id_product' => $code]);
		foreach ($data['product_color_list'] as $key => $value) {
			if($value['ismain'] == 1){
				$product['color_code'] = $value['color_code'];
			}
		}
		$data['product_picture_list'] = $this->general_mod->product_picture_list_db(['id_product' => $code]);

		$data['product'] = $product;
		$data['suggest_product'] = $suggest_product;
		$data['subview'] 			= 'shop/detail';
		$data['meta_title'] 	= 'Shop';
		$this->load->view('index', $data);
	}
}
